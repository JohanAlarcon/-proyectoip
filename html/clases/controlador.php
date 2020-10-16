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
        
        $celda          = array();
        
        foreach($arrayInsert as $contenido){
            
            foreach($contenido as $llave => $valor){

                    //Regla 1: Todos los campos tengan valores
                    if(trim($valor)==''){
                        $errores .= " <br><strong>Fila ".$i."</strong> : La columna ".$llave." No puede ser vacia!!";
                        $error = 1;
                        
                        switch ($llave) {
                           
                            case 'DEPENDENCIA':
                                $posicion = 'A'.$i;
                                array_push($celda,$posicion);
                                break;
                                
                            case 'NUMERODEQUINCENA':
                                $posicion = 'B'.$i;
                                array_push($celda,$posicion);
                                break;
                                
                            case 'TIPOMOVIMIENTO':
                                $posicion = 'C'.$i;
                                array_push($celda,$posicion);
                                break;
                                
                            case 'FECHA DE MOVIMIENTO':
                                $posicion = 'D'.$i;
                                array_push($celda,$posicion);
                                break;
                                
                            case 'NUMEROCONTROL':
                                $posicion = 'E'.$i;
                                array_push($celda,$posicion);
                                break;
                                
                            case 'NOMBRE':
                               $posicion = 'F'.$i;
                                array_push($celda,$posicion);
                                break;
                                
                            case 'PRMIERAPELLIDO':
                                $posicion = 'G'.$i;
                                array_push($celda,$posicion);
                                break;
                                 
                            case 'SEGUNDOAPELLIDO':
                                $posicion = 'H'.$i;
                                array_push($celda,$posicion);
                                break;
                                
                            case 'CURP':
                                $posicion = 'I'.$i;
                                array_push($celda,$posicion);
                                break;
                                
                            case 'RFC':
                                $posicion = 'J'.$i;
                                array_push($celda,$posicion);
                                break;
                                
                            case 'TIPOTRABAJADOR':
                                $posicion = 'K'.$i;
                                array_push($celda,$posicion);
                                break;
                           
                            case 'PUESTO':
                                $posicion = 'L'.$i;
                                array_push($celda,$posicion);
                                break;
                                
                            case 'TIPODEGENERACION':
                                $posicion = 'M'.$i;
                                array_push($celda,$posicion);
                                break;
                                
                            case 'SALARIOINTEGRADO':
                                $posicion = 'N'.$i;
                                array_push($celda,$posicion);
                                break;
                                
                            case 'SUELDONETO':
                                $posicion = 'O'.$i;
                                array_push($celda,$posicion);
                                break;
                                
                            case 'SALARIOCOTIZACION':
                                $posicion = 'P'.$i;
                                array_push($celda,$posicion);
                                break;
                                
                            case 'IMPORTE DE BONOS EXTRAORDINARIOS':
                                $posicion = 'Q'.$i;
                                array_push($celda,$posicion);
                                break;
                                
                            case 'IMPORTE DE AGUINALDO':
                                $posicion = 'R'.$i;
                                array_push($celda,$posicion);
                                break;
                            
                            case 'APORTACIONSALARIOCOTIZACION':
                                $posicion = 'S'.$i;
                                array_push($celda,$posicion);
                                break;
                                
                            case 'APORTACIONPENSIONESAGUINALDO':
                                $posicion = 'T'.$i;
                                array_push($celda,$posicion);
                                break;
                                
                            case 'APORTACIONPENSIONESEXTRAORDINARIO':
                                $posicion = 'U'.$i;
                                array_push($celda,$posicion);
                                break;
                            
                            case 'DIASAPORTASIONESEXTRAORDINARIO':
                                $posicion = 'V'.$i;
                                array_push($celda,$posicion);
                                break;
                                
                            case 'APORTACIONENTIDAD':
                                $posicion = 'W'.$i;
                                array_push($celda,$posicion);
                                break;
                                
                            case 'IMPORTECP':
                                $posicion = 'X'.$i;
                                array_push($celda,$posicion);
                                break;
                            
                            case 'IMPORTEPH':
                                $posicion = 'Y'.$i;
                                array_push($celda,$posicion);
                                break;
                                
                            case 'IMPORTESH':
                                $posicion = 'Z'.$i;
                                array_push($celda,$posicion);
                                break;
                                
                            case 'IMPORTEPHESP':
                                $posicion = 'AA'.$i;
                                array_push($celda,$posicion);
                                break;
                                
                            case 'IMPORTESHESP':
                                $posicion = 'AB'.$i;
                                array_push($celda,$posicion);
                                break;
                                
                            case 'NoCREDITOAVAL':
                                $posicion = 'AC'.$i;
                                array_push($celda,$posicion);
                                break;
                                
                            case 'IMPORTEAVAL':
                                $posicion = 'AD'.$i;
                                array_push($celda,$posicion);
                                break;
                            
                           
                        }
                        
                    }
                    
                    //Regla 3: Que el campo RFC contenga 13 digitos
                    if($llave=='RFC' && strlen($valor)!=13){
                        $errores .= "<br><strong>Fila ".$i."</strong> : La columna ".$llave." Debe contener 13 digitos!! ";
                        $error = 1;
                        
                        $posicion = 'J'.$i;
                        
                        array_push($celda,$posicion);
                    }
                    
                   //Regla 4: Que el campo CURP contenga 13 digitos
                    if($llave =='CURP' && strlen($valor)!=18){
                        $errores .= "<br><strong>Fila ".$i."</strong> : La columna ".$llave." Debe contener 18 digitos!! ";
                        $error = 1;
                        
                        $posicion = 'I'.$i;
                        
                        array_push($celda,$posicion);
                    }
                    
                    //Regla 5: Que el campo TIPO DE MOVIMIENTO  este entre los valores del 1 al 20
                    
                    if($llave=='TIPOMOVIMIENTO' && ($valor<1 || $valor>20)){
                        $errores .= "<br><strong>Fila ".$i."</strong> : La columna ".$llave." Debe tener un numero entre 1 y 20!!";
                        $error = 1;
                        
                        $posicion = 'C'.$i;
                        
                        array_push($celda,$posicion);
                    }
                    
                    //Regla 6: Que el campo TIPO TRABAJO  este entre los valores del 1 al 3
                    if($llave=='TIPOTRABAJADOR' && ($valor<1 || $valor>3)){
                        $errores .= "<br><strong>Fila ".$i."</strong> : La columna ".$llave." Debe tener un numero entre 1 y 3!!";
                        $error = 1;
                        
                        $posicion = 'K'.$i;
                        
                        array_push($celda,$posicion);
                    }
                    
                    //Regla 7: Que el campo TIPO GENERACION  este entre los valores del 1 al 2
                    if($llave=='TIPODEGENERACION' && ($valor<1 || $valor>2)){
                        $errores .= "<br><strong>Fila ".$i."</strong> : La columna ".$llave." Debe tener un numero entre 1 y 2!!";
                        $error = 1;
                        
                        $posicion = 'M'.$i;
                        
                        array_push($celda,$posicion);
                    }
                    
                     //Regla 8: Que el campo DEPENDENCIA sea igual a alguno de los valores de la entidad
                    if($llave=='DEPENDENCIA' && !in_array($valor, $dependencias)){
                        $errores .= "<br><strong>Fila ".$i."</strong>: No se encontro ninguna dependencia con el codigo ".$valor."!! ";
                        $error = 1;
                        
                        $posicion = 'A'.$i;
                        
                        array_push($celda,$posicion);
                    }
                    
                     //Regla 9: Que el campo QUINCENA  sea igual a la quincena seleccionada del 1 al 24
                    if($llave=='NUMERODEQUINCENA' && ($valor<1 || $valor>24)){
                        $errores .= "<br><strong>Fila ".$i."</strong>: El numero de quincena ".$valor." no es válido!!";
                        $error = 1;
                        
                        $posicion = 'B'.$i;
                        
                        array_push($celda,$posicion);
                    }
                    
                }
                
              
                $i++;
        }
           
        if($error>0){
            
            $respuesta = array('error'=>1,'error_texto'=>$errores);
           
            require_once("PHPExcel/PHPExcel/IOFactory.php");
            
            // Creamos un objeto PHPExcel
            $objPHPExcel = new PHPExcel();
            $objReader = PHPExcel_IOFactory::createReader('Excel2007');
            $objPHPExcel = $objReader->load('../../assets/archivos/archivoExcel.xlsx');
            // Indicamos que se pare en la hoja uno del libro
            $objPHPExcel->setActiveSheetIndex(1);
            
            //Modificamos los valores
            
            for ($e=0; $e <count($celda); $e++) { 
               
                //$objPHPExcel->getActiveSheet()->SetCellValue($celda[$e], 'Error !!');
                
                $objPHPExcel->getActiveSheet()->getStyle($celda[$e])->getFill() ->applyFromArray(array('type' => PHPExcel_Style_Fill::FILL_SOLID, 'startcolor' => array('rgb' => 'ff2d00') )); 

            }
            
            //Guardamos los cambios
            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
            
            $directorio = "../../assets/archivos/Archivo_salida.xlsx";
            
            if(file_exists($directorio)) unlink($directorio);
            
            $objWriter->save($directorio);
            
            echo json_encode($respuesta);
            
        }else{
            
            $tabla   = $this -> getValoresTabla($arrayInsert);
           
            $respuesta = array('error'=>0,'tabla'=>$tabla);
            
            echo json_encode($respuesta);
            
        }
            
        
        
    }
    protected function getValoresTabla($arrayInsert)
    {   
        
        $trabajadores     = array();
        $importeph        = 0; // Prestamo hipotecario
        $importecp        = 0; // Credito personal
        $importesh        = 0; // Seguro  hipotecario
        $importephesp     = 0; // Prestamo hipotecario especial 
        $importeaval      = 0; // Monto avalado
        $numeroQuincena   = 0; // Quincena
        $salarioCotizacion= 0; // Salario cotizacion
        $aguinaldo        = 0; // Aguinaldo
        $pensiones        = 0; // Pensiones Extraordinarios
        $entidad          = 0; // De la entidad
      
        foreach($arrayInsert as $contenido){
            
            foreach($contenido as $llave => $valor){

                if($llave=='CURP' && $valor!= ''){
                    
                   array_push($trabajadores,$valor);
                    
                }
                
                // Prestamo hipotecario
                if($llave=='IMPORTEPH' && is_numeric($valor)){
                    
                    $importeph += $valor;
                    
                }
                
                // Credito personal
                if($llave=='IMPORTECP' && is_numeric($valor)){
                    
                    $importecp += $valor;
                    
                }
                
                // Seguro hipotecario
                if($llave=='IMPORTESH' && is_numeric($valor)){
                    
                    $importesh += $valor;
                    
                }
                
                // Prestamo hipotecario especial 
                if($llave=='IMPORTEPHESP' && is_numeric($valor)){
                    
                    $importephesp += $valor;
                    
                }
                
                // Seguro del prestamo hipotecario especial
                if($llave=='IMPORTESHESP' && is_numeric($valor)){
                    
                    $importeshesp += $valor;
                    
                }
                
                // Monto avalado
                if($llave=='IMPORTEAVAL' && is_numeric($valor)){
                    
                    $importeaval += $valor;
                    
                }
                
                // Quincena
                if($llave=='NUMERODEQUINCENA' && is_numeric($valor)){
                    
                    $numeroQuincena += $valor;
                    
                }
                
                // Salario cotizacion
                if($llave=='SALARIOCOTIZACION' && is_numeric($valor)){
                    
                    $salarioCotizacion += $valor;
                    
                }
                
                // Aguinaldo
                if($llave=='APORTACIONPENSIONESAGUINALDO' && is_numeric($valor)){
                    
                    $aguinaldo += $valor;
                    
                }
                
                // Pensiones Extraordinarios
                
                if($llave=='APORTACIONPENSIONESEXTRAORDINARIO' && is_numeric($valor)){
                    
                    $pensiones += $valor;
                    
                }
                
                // De la entidad
                
                if($llave=='APORTACIONENTIDAD' && is_numeric($valor)){
                    
                    $entidad += $valor;
                    
                }
                    
            }
                
        }
        
            $trabajadores = array_unique($trabajadores); //Eliminar elementos repetidos
        
            return array(
                
                        'quincena'             =>number_format($numeroQuincena,0,",","."),
                        'trabajadores'         =>number_format(count($trabajadores),0,",","."),
                        'salarioCotizacion'    =>number_format($salarioCotizacion,0,",","."),
                        'prestamosPersonales'  =>number_format($importecp,0,",","."),
                        'aguinaldo'            =>number_format($aguinaldo,0,",","."),
                        'prestamosHipotecarios'=>number_format($importeph,0,",","."),
                        'pensiones'            =>number_format($pensiones,0,",","."),
                        'seguroHipotecario'    =>number_format($importesh,0,",","."),
                        'entidad'              =>number_format($entidad,0,",","."),
                        'hipotecarioEspecial'  =>number_format($importephesp,0,",",".")
                        
                        );

                    /*  Variables por definir : 
                    
                        Ejercicio
                        Aportaciones
                    
                    */
      
    }
    
    protected function upload_max_filesize($size = "128M")
    {
        /* Inicializamos la variable upload_max_filesize */
        ini_set('upload_max_filesize', $size);
    }
    
    protected function createTable($arrayInsert)
    {
        
        #Array inicial
        
        /* [0] => Array
        (
            [DEPENDENCIA] => 2
            [NUMERODEQUINCENA] => 1
            [TIPOMOVIMIENTO] => 20
            [FECHA DE MOVIMIENTO] => 44177
            [NUMEROCONTROL] => RAQUEL
            [NOMBRE] => VELAZQUEZ
            [PRMIERAPELLIDO] => BARAJAS
            [SEGUNDOAPELLIDO] => VEBR7712207Z6
            .
            .
            .
            .
        */
            
        $titulos         = '';       
        
        foreach($arrayInsert as $contenido){
            
            foreach($contenido as $llave => $valor){
                
               $titulos = $titulos == '' ? $llave : $titulos.','.$llave; //Se concatenan los titulo con ,
                
            }
            
          break;
           
        }
        
        $array_titulos   = explode(',',$titulos); //Se convierten los titulos en array
        
        $j = 0;
        
                                       
            foreach($arrayInsert as $contenido){
                
                foreach($contenido as $llave => $valor){
                    
                    for ($i=0; $i < count($array_titulos); $i++) {   //se recorre el array de los titulos para asiganarle el valor correspondiente al titulo
                        
                        if($array_titulos[$i] == $llave){
                            
                            if($j == 0)  $array_contenido[$llave] = array(); //En la primera iteracion se inicializa un array con la posicion de los titulos y el valor correspondiente
                        
                            array_push($array_contenido[$llave],$valor);
                            
                        }
                    
                    }
                
                }     
                
              $j++;                                                                                     
            
            }
          
          
        //Se construye la tabla con el nuevo array re-estructurado
        
        /* 
        [DEPENDENCIA] => Array
            (
                [0] => 2
                [1] => 1
                [2] => 1
            )

        [NUMERODEQUINCENA] => Array
            (
                [0] => 1
                [1] => 1
                [2] => 1
            )

        [TIPOMOVIMIENTO] => Array
            (
                [0] => 20
                [1] => 2
                [2] => 2
            ) 
            .
            .
            .
            .
            */
        
        $tabla           = '';
        
        foreach($array_contenido as $titulo  => $valor){ //Recorre los titulos
             
             $tabla  .= "<tr>";
            
             $tabla  .= "<td style='font-weight:bold'>".$titulo."</td>";
            
             foreach($valor as $llave){ //Recorre los valores de los titulos
                     
                if($titulo == 'FECHA DE MOVIMIENTO'){
                    
                    $fecha = ($llave - 25569) * 86400;
    
                    $fecha = gmdate("Y-m-d", $fecha);
                    
                    $tabla  .= "<td>".$fecha."</td>";
                    
                }else{
                    
                    $tabla  .= "<td>".$llave."</td>";
                    
                }
                 
             }
             
             $tabla .= "</tr>";
        }
    
        
        return $tabla;
       
    }
         
    /* protected function createTable($arrayInsert){
   
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
       
    } */
    
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
