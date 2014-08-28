$().ready(function(){
	$('button#suscrib').click(function(){
		$('button#suscrib').attr("disabled", "disabled");
		var checkboxValues = "";
		$('input[name="productos[]"]:checked').each(function() {
			checkboxValues += $(this).val() + ",";
		});
		//eliminamos la última coma.
		checkboxValues = checkboxValues.substring(0, checkboxValues.length-1);
    	var mail_sus = $('#mail_sus').val();
    	if(checkboxValues != '' && mail_sus != ''){
    		if($("#mail_sus").val().indexOf('@', 0) == -1 || $("#mail_sus").val().indexOf('.', 0) == -1) {
				$('div.span12').css('display','inline');
		        $('#aviso_sus').append("<div class='alert alert-warning' id='alertaAviso'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>¡Cuidado!</strong> El email ingresado no es una direccion valida.</div>");
		    }else{
				var dataString ='mail_sus='+mail_sus+'&checkboxValues='+checkboxValues+'&<?php echo $this->security->get_csrf_token_name(); ?>=<?php echo $this->security->get_csrf_hash(); ?>';
			   	$.ajax({
	    		   	type: "POST",
					url: "<?php echo base_url(); ?>inicio/registrarsuscrip/",
					data: dataString,
	        		success: function(msg){
		 		        if(msg == 1){
		 		        	$('button#suscrib').removeAttr("disabled");
							$('#alertaExito').append("<div class='alert alert-success' id='alertaAviso'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>¡Bien hecho!</strong> Ud. se ah suscrito correctamente.</div>");
							$("#mdlSuscribir").modal('hide');
						}else{
							$('button#suscrib').removeAttr("disabled");
							$('div.span12').css('display','inline');
							$('#aviso_sus_error').append("<div class='alert alert-error' id='alertaError'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>¡Error!</strong> No se pudo registrar la Suscripción.</div>");
						}	
	 		        }
      			});
      		}
    	}else{
    		$('div.span12').css('display','inline');
		    $('#aviso_sus').append("<div class='alert alert-warning' id='alertaAviso'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>¡Cuidado!</strong> Usted no ah ingresado todos los campos del formulario.</div>");
    		$('button#suscrib').removeAttr("disabled");
    	}
   	});
	$('button#contac').click(function(){			
		
    	var nombre_cont = $('#nombre_cont').val(); mail_cont = $('#mail_cont').val(); mensaje = $('#mensaje').val(); 
		if($("#mail_cont").val().indexOf('@', 0) == -1 || $("#mail_cont").val().indexOf('.', 0) == -1 || nombre_cont == "" || mensaje =="") {
	            $('#alertaAvisoCont').modal("show");
	    }else{
			var dataString ='mail_cont='+mail_cont+'&nombre_cont='+nombre_cont+'&mensaje='+mensaje+'&<?php echo $this->security->get_csrf_token_name(); ?>=<?php echo $this->security->get_csrf_hash(); ?>';
		   	$.ajax({
    		   	type: "POST",
			url: "<?php echo base_url(); ?>inicio/enviarmail/",
			data: dataString,
        		success: function(msg){
	 		        if(msg == 1){
						$('#alertaExitoCont').modal("show");
						$("#mdlSuscribir").modal('hide');
						setTimeout('window.location.href="<?php echo base_url(); ?>"', 2000);
					}else{
						$('#alertaErrorCont').modal("show");
					}	
 		        }
  			});
  		}

   	});
});