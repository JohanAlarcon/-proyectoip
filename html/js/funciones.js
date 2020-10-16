
/* Evento cuando se suba el archivo */

$("#archivo_subir").on('change', function(e) {
    
    var formData = new FormData();
    
    formData.append("archivo_subir",$("input[name=archivo_subir]")[0].files[0]);

    $.ajax({
        url        : "clases/controlador.php?ACTIONCONTROLER=uploadFileAutomatically&rand="+Math.random(),
        data       : formData,
        method: 'POST',
        processData: false,
        contentType: false,
        beforeSend : function(){
         
        },
        success    : function(resp){
            
            console.log('resp:', resp);
            
            try{  
                          
                var data        = $.parseJSON(resp);
                
                var error       = data.error;
             
                if(error==1){
                    
                    var error_texto = data.error_texto;
                    
                    $("#table").attr("style","display:none");
                    
                    $("#visual_errores").html('<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>El archivo contiene errores!</strong> '+error_texto+'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                    
                    $("#visual_success").html('');
                    
                    $(".imgExcel").attr("src","../assets/images/icon-excel-enable.png");
                    
                    $(".txtExcel").attr("style","color: #000000").attr("href", "../assets/archivos/Archivo_salida.xlsx");
                    
                    $(".txtExcel").addClass('efect-hover');
                    
                }else{
                    
                    var tabla       = data.tabla;
                    
                    $("#visual_success").html('<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>El archivo Fue cargado con exito!</strong> La información fue procesada<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                    
                    $("#visual_errores").html('');
                    
                    $("#table").attr("style","display:block");
                    
                    $("#quincena").html('<h6>'+tabla.quincena+"</h6>");
                    //$("#ejercicio").html('<h6>'+tabla.ejercicio+"</h6>");
                    $("#trabajadores").html('<h6>'+tabla.trabajadores+"</h6>");
                    //$("#aportaciones").html('<h6>'+tabla.aportaciones+"</h6>");
                    $("#salario").html('<h6>'+tabla.salarioCotizacion+"</h6>");
                    $("#prestamosPersonales").html('<h6>'+tabla.prestamosPersonales+"</h6>");
                    $("#aguinaldo").html('<h6>'+tabla.aguinaldo+"</h6>");
                    $("#prestamosHipotecarios").html('<h6>'+tabla.prestamosHipotecarios+"</h6>");
                    $("#pensiones").html('<h6>'+tabla.pensiones+"</h6>");
                    $("#seguro").html('<h6>'+tabla.seguroHipotecario+"</h6>");
                    $("#entidad").html('<h6>'+tabla.entidad+"</h6>");
                    $("#hipotecario").html('<h6>'+tabla.hipotecarioEspecial+"</h6>");
                    
                    $(".imgExcel").attr("src","../assets/images/icon-excel.png");
                    
                    $(".txtExcel").attr("style","color: #8d97ad").attr("href", "#");
                    
                    $(".txtExcel").removeClass('efect-hover');
                    
                }   
            }catch(e){
                
                $("#table").attr("display","none");
                
                $(".imgExcel").attr("src","../assets/images/icon-excel.png");
                $(".txtExcel").attr("style","color: #8d97ad").attr("href", "#");
                
                $("#visual").html('<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Algo salió mal!</strong> Contacta con el administrador<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                
                console.log(e);
            }        
        }
      });
});



