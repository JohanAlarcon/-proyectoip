
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
                var error_texto = data.error_texto;
                var tabla       = data.tabla;

                if(error==1){
                    
                    $("#table").html('');
                    
                    $("#visual").html('<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>El archivo contiene errores!</strong> '+error_texto+'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                    
                }else{
                    
                    $("#visual").html('<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>El archivo Fue cargado con exito!</strong> La información fue procesada<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                    
                    $("#table").html(tabla);
                    
                    
                }   
            }catch(e){
                
                $("#table").html('');
                
                $("#visual").html('<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Algo salió mal!</strong> Contacta con el administrador<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                
                console.log(e);
            }        
        }
      });
});



