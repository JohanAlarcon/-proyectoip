
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



/* function validacionPrevia(){
    // Si hay que validar un dato antes de subirlo 
    if(1){
      return true;
    }else{
       alertJquery('Error de validacion','Error');
       return false;
     }
    
}


function finalizaCarga(response){	  
    if($.trim(response) == 'NA'){
      alertJquery('No se guardo');
    }else{          
       alertJquery(response);           
    } 
} */


/* function uploadFileAutomatically(objFile,parameters,beforesend,onsuccess){   
    //si se debe ejecutar alguna funcion antes de enviar el formulario 
    if(beforesend){
        if(!beforesend()){           
            return false;
        }
    }
    
    var formulario   = objFile.form;
    var methodForm   = formulario.method;
    
    //Se asigna una accion que se validara en el controlador
    
    if(formulario.ACTIONCONTROLER){
        var actioncontroler = formulario.ACTIONCONTROLER.value;  
        formulario.ACTIONCONTROLER.value = 'uploadFileAutomatically';
    }else{ 
        var patt       = /[?]/g;
        var actionForm = formulario.action;
        if(!patt.test(actionForm)){
            formulario.action = actionForm+'?ACTIONCONTROLER=uploadFileAutomatically';      
        }
        if(parameters != ''){
            var parametersObj = parameters.split(",");
            
            for(param in parametersObj){
                formulario.action += '&'+parametersObj[param]+'='+document.getElementById(parametersObj[param]).value;
            }
        }        
    }    
    
    formulario.method  = 'POST';
    formulario.enctype = 'multipart/form-data';
    
    var targetForm = formulario.target;
    
    if(!document.getElementById('frameUploadFileAutomatically')){
        
        var frameUploadFileAutomatically        = document.createElement("iframe");
        frameUploadFileAutomatically.name   = 'frameUploadFileAutomatically';
        frameUploadFileAutomatically.id     = 'frameUploadFileAutomatically';
        frameUploadFileAutomatically.style.width  = '0px';
        frameUploadFileAutomatically.style.height = '0px';
        
        document.body.appendChild(frameUploadFileAutomatically);
        
    }
    
    formulario.target = 'frameUploadFileAutomatically'; 
   
    
    formulario.submit();
    frameUploadFileAutomatically.onload = function(){
        console.log("llegamios a la funcion"+frameUploadFileAutomatically.innerHTML); 

    }

    
    formulario.method = methodForm;
    formulario.action = actionForm;
    formulario.target = targetForm;
    $(formulario).removeAttr("enctype");
    
} */

/* function obtenerRespuesta(){
 console.log("llegamios a la funcion");
} */