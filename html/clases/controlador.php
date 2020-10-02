<?php

class Status
{
    
  
    public function __construct()
    {
        if (isset($_REQUEST['ACTIONCONTROLER'])) {
            $funcion = $_REQUEST['ACTIONCONTROLER'];
            $this->$funcion();
        }
    }      

    private function uploadFileAutomatically(){
       
        $this->upload_max_filesize("2048M");
        /* Variable que se puede validar si es necesario */
      
        $archivoPOST     = $_FILES['archivo_subir'];
        $rutaAlmacenar   = "../../assets/archivos/";
        
        //Inicializamos el texto de error
        $errores= '';
        
        //creamos un array con las dependencias
        $dependencias = array('12','47','48','49','02','50','07','51','52','53','54','13','34','25','55','56','57','58','59','60','61','62','63','64','65','03','66','67','68','69','70','71','110','72','73','74','75','76','77','78','79','80','109','14','81','19','82','83','05','84','26','29','35','15','06','08','01','28','43','87','88','89','90','40','44','91','92','16','93','94','42','30','45','09','46','04','41','95','36','96','39','97','98','99','23','100','101','38','102','103','104','105','108','106','107','37','85','86','10','31','111');
        
        //Indicador de errores
        $error = 0;
       
        $dir_file       = $this -> moveUploadedFile($archivoPOST, $rutaAlmacenar, "archivoExcel");
        $arrayInsert    = $this -> getArrayInsert($dir_file); 
        $i              = 2;
        $tabla          = $this -> createTable($arrayInsert);
       
       /* Preguntas :
       
        * Campo relacionado con su tipo de dato
       
        */
        
        foreach($arrayInsert as $contenido){
            
            foreach($contenido as $llave => $valor){

                    //Regla 1: Todos los campos tengan valores
                    if(trim($valor)==''){
                        $errores .= " <br><strong>Fila ".$i."</strong> : La columna ".$llave." No puede ser vacia!!";
                        $error = 1;
                    }
                    
                    //Regla 3: Que el campo RFC contenga 13 digitos
                    if($llave=='RFC' && strlen($valor)!=13){
                        $errores .= "<br><strong>Fila ".$i."</strong> : La columna ".$llave." Debe contener 13 digitos!! ";
                        $error = 1;
                    }
                    
                   //Regla 4: Que el campo CURP contenga 13 digitos
                    if($llave=='CURP' && strlen($valor)!=18){
                        $errores .= "<br><strong>Fila ".$i."</strong> : La columna ".$llave." Debe contener 18 digitos!! ";
                        $error = 1;
                    }
                    
                    //Regla 5: Que el campo TIPO DE MOVIMIENTO  este entre los valores del 1 al 20
                    
                    if($llave=='TIPOMOVIMIENTO' && ($valor<1 || $valor>20)){
                        $errores .= "<br><strong>Fila ".$i."</strong> : La columna ".$llave." Debe tener un numero entre 1 y 20!!";
                        $error = 1;
                    }
                    
                    //Regla 6: Que el campo TIPO TRABAJO  este entre los valores del 1 al 3
                    if($llave=='TIPOTRABAJADOR' && ($valor<1 || $valor>3)){
                        $errores .= "<br><strong>Fila ".$i."</strong> : La columna ".$llave." Debe tener un numero entre 1 y 3!!";
                        $error = 1;
                    }
                    
                    //Regla 7: Que el campo TIPO GENERACION  este entre los valores del 1 al 2
                    if($llave=='TIPODEGENERACION' && ($valor<1 || $valor>2)){
                        $errores .= "<br><strong>Fila ".$i."</strong> : La columna ".$llave." Debe tener un numero entre 1 y 2!!";
                        $error = 1;
                    }
                    
                     //Regla 8: Que el campo DEPENDENCIA sea igual a alguno de los valores de la entidad
                    if($llave=='DEPENDENCIA' && !in_array($valor, $dependencias)){
                        $errores .= "<br><strong>Fila ".$i."</strong>: No se encontro ninguna dependencia con el codigo ".$valor."!! ";
                        $error = 1;
                    }
                    
                     //Regla 9: Que el campo QUINCENA  sea igual a la quincena seleccionada del 1 al 24
                    if($llave=='NUMERODEQUINCENA' && ($valor<1 || $valor>24)){
                        $errores .= "<br><strong>Fila ".$i."</strong>: El numero de quincena ".$valor." no es válido!!";
                        $error = 1;
                    }
                    
                }
                
              
                $i++;
        }
           
        if($error>0){
            $respuesta = array('error'=>1,'error_texto'=>$errores,'texto'=>'');
            echo json_encode($respuesta);
        }else{
           
            $respuesta = array('error'=>0,'error_texto'=>$errores,'tabla'=>$tabla);
            echo json_encode($respuesta);
            
        }
            
        
        
    }
    protected function upload_max_filesize($size = "128M")
    {
        /* Inicializamos la variable upload_max_filesize */
        ini_set('upload_max_filesize', $size);
    }
    
    protected function createTable($arrayInsert)
    {
        
       /* ================ ESTRUCTURA EJEMPLO ================ */
       
       /*  <thead>
            <tr>
            
                <th style='font-weight:bold'>Titulo1</th>
                <th style='font-weight:bold>Titulo2</th>
                
            </tr>
        </thead>

        <tbody>
            <tr>
                
                <td>Mark</td>
                <td>Otto</td>
            
            </tr>
            <tr>
                
                <td>Jacob</td>
                <td>Thornton</td>
            
            </tr>
        </tbody> */              
   
        $tabla           = '';
        $titulo_tabla    = '<thead><tr>';
        $contenido_tabla = '<tbody>';
        $t               = 0;
        
        foreach($arrayInsert as $contenido){
            
            $contenido_tabla .= "<tr>";
            
            foreach($contenido as $llave => $valor){
                
                if ($t == 0)  $titulo_tabla  .= "<th style='font-weight:bold'>".$llave."</th>";
               
                if($llave == 'FECHA DE MOVIMIENTO'){
                    
                    $fecha = ($valor - 25569) * 86400;
	
	                $fecha = gmdate("Y-m-d", $fecha);
                    
                    $contenido_tabla  .= "<td>".$fecha."</td>";
                    
                }else{
                    
                    $contenido_tabla  .= "<td>".$valor."</td>";
                    
                }
                
            }
            
            $contenido_tabla .= "</tr>";
            
            $t++;
        }
        
        $titulo_tabla    .= '</tr></thead>';
        $contenido_tabla .= '</tbody>';
        
        $tabla = $titulo_tabla.''.$contenido_tabla;
        
        return $tabla;
       
    }
    
    private function moveUploadedFile($FILES, $directorio_subidas = '../../archivos/varios/', $nombre)
    {
        /* Funcion para mover el archivo a la ruta especificada */
        foreach ($FILES as $llave => $valor) {
            if (is_array($valor)) {
                exit('El metodo se utiliza de la siguiente manera: <br><br> $this -> moveUploadedFile($_FILES[\'nombre_campo\'],\'../directorio_guardar_archivo/\',\'nombre archivo\')');
            }
        }

        if ($FILES["error"] == 0) {
            $nombre_tmp = $FILES["tmp_name"];
            if (trim($nombre) == null) {
                $nombre = $FILES["name"];
            } else {
                $nameFile  = explode(".", $FILES["name"]);
                $indexMax  = count($nameFile) - 1;
                $extension = $nameFile[$indexMax];
                $nombre    = "$nombre.$extension";
            }
            if (move_uploaded_file($nombre_tmp, "$directorio_subidas/$nombre")) {
                return "$directorio_subidas$nombre";
            } else {
                exit("Error subiendo el archivo : $directorio_subidas/$nombre !!!");
            }
        } else {

            if ($FILES["error"] == 1) {
                exit("El archivo subido excede la directiva upload_max_filesize en php.ini.");
            } else if ($FILES["error"] == 2) {
                exit("El archivo subido excede la directiva MAX_FILE_SIZE que fue especificada en el formulario HTML.");
            } else if ($FILES["error"] == 3) {
                exit("El archivo subido fue sólo parcialmente cargado.");
            } else if ($FILES["error"] == 4) {
                exit("Ningún archivo fue subido.");
            } else if ($FILES["error"] == 5) {
                exit("Falta la carpeta temporal. Introducido en PHP 4.3.10 y PHP 5.0.3.");
            } else if ($FILES["error"] == 6) {
                exit("No se pudo escribir el archivo en el disco. Introducido en PHP 5.1.0.");
            } else if ($FILES["error"] == 8) {
                exit("Una extensión de PHP detuvo la carga de archivos. PHP no proporciona una forma de determinar cual extensión causó la parada de la subida de archivos; el examen de la lista de extensiones cargadas con phpinfo() puede ayudar. Introducido en PHP 5.2.0.");
            }
        }
    }
    protected function excelToArray($dir_file, $rowLimit = 'ALL')
    {
        /* Instanciamos la libreria */
        require_once("PHPExcel/PHPExcel/IOFactory.php");
        if (is_file("$dir_file")) {
            $filePath        = explode(".", "$dir_file");
            $indexMax        = count($filePath) - 1;
            $fileExtension   = $filePath[$indexMax];
            $arrayFileUpload = array();
            $rowArray        = 0;

            if ($fileExtension == 'xls' || $fileExtension == 'xlsx') {
                if ($fileExtension == 'xlsx') {
                    
                    $objPHPExcel     = PHPExcel_IOFactory::load("$dir_file");
                    $objWorksheet    = $objPHPExcel->getActiveSheet();
                    foreach ($objWorksheet->getRowIterator() as $row) {
                        $cellIterator = $row->getCellIterator();
                        $cellIterator->setIterateOnlyExistingCells(false); 
                        $columnArray = 0;
                        foreach ($cellIterator as $cell) {
                            $arrayFileUpload[$rowArray][$columnArray] = $cell->getValue();
                            $columnArray++;
                        }
                        if (is_numeric($rowLimit) && $rowArray == $rowLimit) break;
                        $rowArray++;
                    }
                } else {
                    $objPHPExcel     = PHPExcel_IOFactory::load("$dir_file");
                    $objWorksheet    = $objPHPExcel->getActiveSheet();
                    foreach ($objWorksheet->getRowIterator() as $row) {
                        $cellIterator = $row->getCellIterator();
                        $cellIterator->setIterateOnlyExistingCells(false); 
                        $columnArray = 0;
                        foreach ($cellIterator as $cell) {
                            $arrayFileUpload[$rowArray][$columnArray] = $cell->getValue();
                            $columnArray++;
                        }
                        if (is_numeric($rowLimit) && $rowArray == $rowLimit) break;
                        $rowArray++;
                    }
                }
                return $arrayFileUpload;
            } else {
                exit("Solo se admiten archivos con extension [ .xls   .xlsx ]");
            }
        } else {
            exit("Debe enviar como parametro una ruta de archivo valida!!!");
        }
    }

    protected function getArrayInsert($dir_file){
  
        $fileContent = $this -> excelToArray($dir_file);
        $keys        = $fileContent[0];
        $arrayInsert = array();        
        for($i = 1; $i <= count($fileContent)-1; $i++){        
          foreach($keys as $llave => $valor){
            $arrayInsert[$i][$valor] = $fileContent[$i][$llave];
          }          
        }            
        return array_values($arrayInsert);       
      }

    
}
$status = new Status();
