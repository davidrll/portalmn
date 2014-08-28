<!DOCTYPE html>

<html>

<head>

	<meta charset="utf-8">

	<title>MERCADO NEGRO - FILMS PERÚ.</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="robots" content="index,follow"/>

	<meta name="keywords" content="mercadonegro, mercadonegro.pe, filmsperu, filmsperu.pe, mercado negro, publicidad, marketing"/>

	<link href="<?php echo base_url(); ?>assets/css/main.css" rel="stylesheet" media="screen">

	<!-- Bootstrap -->

    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" media="screen">

    <link href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-validate.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/validador.js"></script>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->

    <!--[if lt IE 9]>

      <script src="<?php echo base_url(); ?>assets/js/html5shiv.js"></script>

    <![endif]-->

    <script type="text/javascript">

    	$().ready(function(){

    		$('#search').tooltip();

    		$('#search1').tooltip();

    		$("#telefono").validCampoFranz('0123456789');
    		$("#ruc").validCampoFranz('0123456789');
    		$("#deposito").validCampoFranz('0123456789');
    		$("#razon").validCampoFranz('0123456789');

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

		    			$('button#contac').removeAttr("disabled");

						$('#aviso_sus').append("<div class='alert alert-warning' id='alertaAviso'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>¡Cuidado!</strong> El email ingresado no es una direccion valida.</div>");

				    }else{

						var dataString ='mail_sus='+mail_sus+'&checkboxValues='+checkboxValues+'&<?php echo $this->security->get_csrf_token_name(); ?>=<?php echo $this->security->get_csrf_hash(); ?>';

					   	$.ajax({

			    		   	type: "POST",

							url: "<?php echo base_url(); ?>inicio/registrarsuscrip/",

							data: dataString,

			        		success: function(msg){

				 		        if(msg == 1){

									$('#aviso_sus').append("<div class='alert alert-success'><strong>¡Bien hecho!</strong> Ud. se ah suscrito correctamente.</div>");

								}else{

									$('button#suscrib').removeAttr("disabled");

									$('#aviso_sus_error').append("<div class='alert alert-error'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>¡Error!</strong> No se pudo registrar la Suscripción.</div>");

								}	

			 		        }

		      			});

		      		}

		    	}else{

				    $('#aviso_sus').append("<div class='alert alert-warning'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>¡Cuidado!</strong> Usted no ah ingresado todos los campos del formulario.</div>");

		    		$('button#suscrib').removeAttr("disabled");

		    	}

		   	});

			$('button#contac').click(function(){			

				$('button#contac').attr("disabled", "disabled");

		    	var nombre_cont = $('#nombre_cont').val(); mail_cont = $('#mail_cont').val(); mensaje = $('#mensaje').val();

		    	if(nombre_cont != '' && mail_cont !='' && mensaje !=''){

		    		if($("#mail_cont").val().indexOf('@', 0) == -1 || $("#mail_cont").val().indexOf('.', 0) == -1 || nombre_cont == "" || mensaje =="") {

				        $('button#contac').removeAttr("disabled");

				        $('#aviso_sus_cont').append("<div class='alert alert-warning' id='alertaAviso'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>¡Cuidado!</strong> El email ingresado no es una direccion valida.</div>");

				    }else{

						var dataString ='mail_cont='+mail_cont+'&nombre_cont='+nombre_cont+'&mensaje='+mensaje+'&<?php echo $this->security->get_csrf_token_name(); ?>=<?php echo $this->security->get_csrf_hash(); ?>';

					   	$.ajax({

			    		   	type: "POST",

							url: "<?php echo base_url(); ?>inicio/enviarmail/",

							data: dataString,

			        		success: function(msg){

				 		        if(msg == 1){

									$('#aviso_sus_cont').append("<div class='alert alert-success'><strong>¡Bien hecho!</strong> Su mensaje ah sido enviado.</div>");

								}else{

									$('button#contac').removeAttr("disabled");

									$('#aviso_sus_error_cont').append("<div class='alert alert-error'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>¡Error!</strong> No se pudo registrar la Suscripción.</div>");

								}	

			 		        }

			  			});

			  		}

		    	}else{

				    $('#aviso_sus_cont').append("<div class='alert alert-warning'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>¡Cuidado!</strong> Usted no ah ingresado todos los campos del formulario.</div>");

		    		$('button#contac').removeAttr("disabled");

		    	}

		   	});

		});

		

		function checkKey(key)

		{

		 

		    var unicode

		    if (key.charCode)

		    {unicode=key.charCode;}

		    else

		    {unicode=key.keyCode;}

		    //alert(unicode); // Para saber que codigo de tecla presiono , descomentar

		 

		    if (unicode == 13){

		        alert('Presiono enter');

		    }

		    

		}

    	(function($){

		    $('.carousel, #galeriaslider').carousel('pause');

		    $('div#a2apage_powered_by.a2a_menu_powered_by').css('display','none');

		});



		//<![CDATA[

		jQuery.noConflict();

		jQuery(function (){

			jQuery(".slide_likebox").hover(function(){

				jQuery(".slide_likebox").stop(true, false).animate({right:"0"},"medium");

			},function(){

				jQuery(".slide_likebox").stop(true, false).animate({right:"-250"},"medium");

			}

		,500);

			return false;

		});



		jQuery(function (){

			jQuery(".slide_youtube").hover(function(){

				jQuery(".slide_youtube").stop(true, false).animate({right:"0"},"medium");

			},function(){

				jQuery(".slide_youtube").stop(true, false).animate({right:"-250"},"medium");

			}

		,500);

			return false;

		});



		jQuery(function (){

			jQuery(".detailvideogal").hover(function(){

				jQuery(this).stop(true, false).animate({opacity:"0.9"},"medium");

			},function(){

				jQuery(this).stop(true, false).animate({opacity:"0"},"medium");

			}

		,500);

			return false;



		});
		function borrarcampos(){
			$("#correo").val("");
			$("#nombre").val("");
			$("#telefono").val("");
			$("#razon").val("");
			$("#ruc").val("");
			$("#deposito").val("");
			$("#direccion").val("");
			$("#comentarios").val("");
			$("input:radio[name='fact']:checked").attr("checked",'false');
		}
		function controlcampos(){
			var con = $('input:radio[name=fact]:checked').val();

			if(con == 0){
				$("#razon").val("");
				$("#ruc").val("");
				$("#deposito").val("");
				$("#razon").attr('disabled','true');
				$("#ruc").attr('disabled','true');
				$("#deposito").attr('disabled','true');

			}
			else{
				$("#razon").removeAttr('disabled');
				$("#ruc").removeAttr('disabled');
				$("#deposito").removeAttr('disabled');
			}
			
		}

		function enviarform(){
			var nombre = $('#nombre').val(); correo = $('#correo').val(); telefono = $('#telefono').val(); direccion = $('#direccion').val(); comentarios = $('#comentarios').val(); razon=$('#razon').val(); deposito=$('#deposito').val(); ruc=$('#ruc').val(); fact=$('input:radio[name=fact]:checked').val(); full=$('input:radio[name=full]:checked').val(); pedido=$('input:radio[name=pedido]:checked').val();

			if(fact == 0){console.log(fact);
				if(comentarios == '' || nombre == '' || correo == '' || $("#correo ").val().indexOf('@', 0) == -1 || $("#correo ").val().indexOf('.', 0) == -1 || direccion =='' || telefono == '' || comentarios == ''){
							/*$("#modalerror").html('<b>ERROR:</b> Faltan completar algunos campos del formulario, por favor verifique.').modal({
								modal: true,position: 'center',width: 450, height: 120,resizable: false,
								buttons: { Ok: function() {$(".ui-dialog-buttonpane button:contains('Registrar')").button("enable");$( this ).modal( "close" );}}
							});*/
				console.log('error');
				//$('#alertaAviso').modal("show");
				$('#aviso_sus_cont_1').append("<div class='alert alert-warning' id='alertaAviso'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>¡Cuidado!</strong> Un campo esta vacio o el email es incorrecto, por favor llenar los campos o corregir el email.</div>");
				//setTimeout('window.location.href="<?php echo base_url(); ?>inicio/suscripcion"', 200);
				}else{console.log('1');
					var dataString ='nombre='+nombre+'&correo='+correo+'&telefono='+telefono+'&direccion='+direccion+'&comentarios='+comentarios+'&fact='+fact+'&pedido='+pedido+'&full='+full+'&<?php echo $this->security->get_csrf_token_name(); ?>=<?php echo $this->security->get_csrf_hash(); ?>';
				   	$.ajax({
		    		   	type: "POST",
					url: "<?php echo base_url(); ?>inicio/enviar/",
					data: dataString,
		        		success: function(msg){
			 		        	if(msg == 1){
								//$('#alertaExito').modal("show");
								$('#aviso_sus_cont_1').append("<div class='alert alert-success'><strong>¡Bien hecho!</strong> El email ha sido enviado con éxito.</div>");
								//$("#mdlNuevoUsua").modal('hide');
								setTimeout('window.location.href="<?php echo base_url(); ?>inicio/suscripcion"', 2000);
							}else{
								//$('#alertaError').modal("show");
								$('button#registrar').removeAttr("disabled");
								$('#aviso_sus_cont_1').append("<div class='alert alert-error'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>¡Error!</strong> No se pudo enviar el email.</div>");
							}	console.log('exito');
		 		        }
	      			});

	      		}
			}
			else{console.log(fact);
				if(comentarios == '' || nombre == '' || correo == '' || $("#correo ").val().indexOf('@', 0) == -1 || $("#correo ").val().indexOf('.', 0) == -1 || direccion =='' || telefono == '' || comentarios == '' || razon == '' || ruc == '' || deposito == ''){
							/*$("#modalerror").html('<b>ERROR:</b> Faltan completar algunos campos del formulario, por favor verifique.').modal({
								modal: true,position: 'center',width: 450, height: 120,resizable: false,
								buttons: { Ok: function() {$(".ui-dialog-buttonpane button:contains('Registrar')").button("enable");$( this ).modal( "close" );}}
							});*/
				console.log('error2');
				//$('#alertaAviso').modal("show");
				$('#aviso_sus_cont_1').append("<div class='alert alert-warning' id='alertaAviso'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>¡Cuidado!</strong> Un campo esta vacio o el email es incorrecto, por favor llenar los campos o corregir el email.</div>");
				//setTimeout('window.location.href="<?php echo base_url(); ?>inicio/suscripcion"', 200);
				}else{console.log('1');
					var dataString ='nombre='+nombre+'&correo='+correo+'&telefono='+telefono+'&direccion='+direccion+'&comentarios='+comentarios+'&razon='+razon+'&deposito='+deposito+'&ruc='+ruc+'&fact='+fact+'&pedido='+pedido+'&full='+full+'&<?php echo $this->security->get_csrf_token_name(); ?>=<?php echo $this->security->get_csrf_hash(); ?>';
				   	$.ajax({
		    		   	type: "POST",
					url: "<?php echo base_url(); ?>inicio/enviar/",
					data: dataString,
		        		success: function(msg){
			 		        	if(msg == 1){
								//$('#alertaExito').modal("show");
								$('#aviso_sus_cont_1').append("<div class='alert alert-success'><strong>¡Bien hecho!</strong> El email ha sido enviado con éxito.</div>");
								//$("#mdlNuevoUsua").modal('hide');
								setTimeout('window.location.href="<?php echo base_url(); ?>inicio/suscripcion"', 2000);
							}else{
								//$('#alertaError').modal("show");
								$('button#registrar').removeAttr("disabled");
								$('#aviso_sus_cont_1').append("<div class='alert alert-error'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>¡Error!</strong> No se pudo enviar el email.</div>");
							}console.log('exito');	
		 		        }
	      			});

	      		}
			}
			
			
		}
		//]]>

	</script>

</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="slide_likebox hidden-phone">

    <div style="color: rgb(255, 255, 255); padding: 8px 5px 0pt 50px;">

        <div class='likeboxwrap'>

            <span><iframe src="http://www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/mercadonegro.publicidad&amp;show_faces=true&amp;header=false&amp;stream=false&amp;width=350&amp;height=350&amp;colorscheme=light&amp;border_color=%23AAAAAA#" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:248px; height:300px;background-color:transparent;"></iframe></span>

        </div>

    </div>

</div>

<!--<div class="slide_youtube hidden-phone">

    <div style="color: rgb(255, 255, 255); padding: 8px 5px 0pt 50px;">

        <div class='youtubewrap'>

            <span><script src="http://www.gmodules.com/gadgets/ifr?url=http://www.google.com/ig/modules/youtube.xml&up_channel=MercadoNegroTV1&synd=open&w=320&h=390&border=&output=js"></script></span>

        </div>

    </div>

</div>-->

	<header>

		<div id="menuhead" class="hidden-phone">

			<div id="contenedor">

				<ul>
					<li><a href="http://mercadonegro.pe/" target="_blank">INICIO</a></li>

					<li><a href="http://mercadonegro.pe/noticias/" target="_blank">NOTICIAS</a></li>

					<li><a href="http://issuu.com/mercadonegro.pe" target="_blank">PERIODICO</a></li>

					<li><a href="#" target="_blank">REVISTA</a></li>

					<li><a href="http://www.dmp.pe" target="_blank">DIRECTORIO</a></li>

					<li><a href="http://mercadonegro.pe/adticket/" target="_blank">EVENTOS</a></li>

					<li><a href="http://mercadonegro.pe/adbolsa/" target="_blank">TRABAJO</a></li>

				</ul>

				<div class="redeshead">

					<iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fmercadonegro.publicidad&amp;width=80&amp;layout=button&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=35&amp;appId=206414429567350" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:80px; height:35px;" allowTransparency="true"></iframe>

					<a href="https://twitter.com/mercado_negro" class="twitter-follow-button" data-show-count="false" data-lang="es" data-show-screen-name="false">Seguir a @mercado_negro</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

					<script src="https://apis.google.com/js/platform.js"></script><div class="g-ytsubscribe" data-channelid="UCX5CezDW1gVYKcMrgWi_j6A" data-layout="default" data-count="hidden"></div>

				</div>

			</div>

		</div>
		<div id="ads-cabecera" class="hidden-phone">

			<!--<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<ins class="adsbygoogle"
			     style="display:inline-block;width:728px;height:90px"
			     data-ad-client="ca-pub-5653457967177591"
			     data-ad-slot="4395939867"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>-->
			<object width="728" height="90">
				<param name="movie" value="http://cludmn.net/ads/ads-cafedigital.swf" />
				<param name="play" value="true" > 
				<embed src="http://cludmn.net/ads/ads-cafedigital.swf" />
				</embed>
			</object>

		</div>

		<div id="cabecera">

			<div id="navegacion">

				<div id="logo"><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/cdn/logo.png" alt="Logo Mercado Negro" /></a></div>

				<!-- NOTICIAS IMPORTANTES -->

				<!-- NOTICIAS IMPORTANTES -->

				<?php 
				if(empty($importante1)){?>
					<div id="importante" class="visible-desktop">
						<a href="javascript:void(0)">
							
							<div class="tituloimp">ESPECIALISTA DE LA SEMANA:</div>
							<div class="contimp"><span class="tituimp">No hay Especialista recomendado aun.</span><br></div>
							
						</a>
					</div>
				<?php }

				else{
					foreach ($importante1 as $impor) {
						$urlBloque1 = Inicio::utf8($impor->nombres);
						$urlBloque1 = Inicio::urlamigable($urlBloque1);
						if(strlen($impor->bio) > 249){
							$impor->bio = trim(utf8_encode($impor->bio)).'...';
						}
						$urlEspecialista = Inicio::urlamigable(utf8_encode($impor->nombres));
							#Controlo que el Cargo no sea muy extenso
							
							$urlNota = Inicio::urlamigable(utf8_encode($impor->frase));
					?>
					<div id="importante" class="visible-desktop">
						<a href="<?php echo base_url().'especialista/'.$impor->codigo.'/'.$urlBloque1;?>">
							
							<div class="tituloimp">ESPECIALISTA DE LA SEMANA:</div>
							<div class="contimp"><span class="tituimp"><?php echo utf8_encode($impor->nombres);?></span><br><?php echo utf8_encode($impor->frase);?></div>
							<img src="<?php echo $impor->imag_colum;?>" width="100" height="100" alt="fw" title=""/>
						</a>
					</div>
					<?php }} ?>		

					<?php 
				if(empty($importante2)){?>


					<div id="importante" class="visible-desktop separador">
						<a href="javascript:void(0)">
							<div class="tituloimp">LIBRO RECOMENDADO:</div>
							<div class="contimp"><span class="tituimp">No hay libro de la semana aun. </span><br></div>
							
						</a>
					</div>
				<?php }

				else{
						foreach ($importante2 as $noticia) {
							$urlBloque1 = Inicio::utf8($noticia->titulo);
							$urlBloque1 = Inicio::urlamigable($urlBloque1);
					?>
					<div id="importante" class="visible-desktop separador">
						<a href="<?php echo base_url().'noticia/'.$noticia->codigo.'/'.$urlBloque1;?>">
							<div class="tituloimp">LIBRO RECOMENDADO:</div>
							<div class="contimp"><span class="tituimp"><?php echo utf8_encode($noticia->titulo); ?>: </span><br>Escrito por <?php echo utf8_encode($noticia->campania); ?></div>
							<img src="<?php echo $noticia->sumilla_g;?>" width="100" height="100" alt="fs" title="" />
						</a>
					</div>
					<?php } 
				}?>

				<!-- FIN DE LAS NOTICIAS IMPORTANTES -->

				<!-- INICIA EL MENÚ DE MERCADO NEGRO -->

				<div class="navbar navbar-inverse">

					<div class="navbar-inner">

						<div class="container">

							<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">

								<span class="icon-bar"></span>

								<span class="icon-bar"></span>

								<span class="icon-bar"></span>

							</button>

							<div class="nav-collapse collapse">

								<ul class="nav">

									<li><a href="<?php echo base_url(); ?>noticias/">Noticias</a></li>

									<li><a href="<?php echo base_url(); ?>especialistas/">Especialistas</a></li>

									<li><a href="<?php echo base_url(); ?>galeria-publicitaria/">Galería Publicitaria</a></li>

									<li><a href="#mdlContact" data-toggle="modal">Contacto</a></li>

									<li><a href="#mdlSuscribir" data-toggle="modal">Suscripción</a></li>

									<li><a href="http://www.youtube.com/user/MercadoNegroTV1" target="_blank">TV</a></li>

									<li><a href="<?php echo base_url(); ?>adbolsa/">TRABAJO</a></li>

									<li><a href="<?php echo base_url(); ?>adticket/">EVENTOS</a></li>

								</ul>

								

								<?php echo form_open('buscar/','class="navbar-search pull-left"');?>

									<input type="text" class="search-query" placeholder="Buscar..." name="buscar" required="TRUE" id="search" data-toggle="tooltip" data-original-title="Busqueda por Fechas: 12/03/2013 o Título: Coca Cola">

								<?php echo form_close(); ?>

							</div>

						</div>

					</div>

				</div>

				<!-- FINALIZA EL MENÚ DE MERCADO NEGRO -->

			</div>

		</div>

	</header>
	<section id="contenedor">
		<?php echo form_open('inicio/enviar',array('id' =>"enviarformulario" ,'class'=>'form-horizontal', 'style'=>'width:auto; margin-top:0px'));?>
		<div class="row-fluid" style="text-align:center">
			<img src="http://cludmn.net/14/07/21/052f10713f1dd65598e0357ea369355b.jpg" max-width="970px"><br>
			<img src="http://cludmn.net/14/07/21/cdcf3791f29d3ba5fa354f5c1ec19a0f.jpg" max-width="970px"><br>
			<img src="http://cludmn.net/14/07/21/54c61be73398902da4654324e384d736.jpg" max-width="970px"><br>
			<img src="http://cludmn.net/14/07/21/9497597ef8a0eec7d1d0b2f7479c3c1c.jpg" max-width="970px">
		</div>

		<div class="row-fluid">
			<div id="fullpack">
				<div style="padding-top: 95px;padding-left: 30px;"><input name="pack" value="1 FULL PACK" type="radio"></div>
				<div style="padding-top: 125px;padding-left: 30px;"><input name="pack" value="5 FULL PACK" type="radio"></div>

				<div style="padding-top: 312px;padding-left: 55px;float: left;width: 12px;"><input name="revista" value="16" type="checkbox"></div>
				<div style="padding-top: 312px;  padding-left: 100px;  float: left;  width: 12px;"><input name="revista" value="15" type="checkbox"></div>
				<div style="padding-top: 312px;  padding-left: 100px;  float: left;  width: 12px;"><input name="revista" value="14" type="checkbox"></div>
				<div style="padding-top: 312px;  padding-left: 100px;  float: left;  width: 12px;"><input name="revista" value="13" type="checkbox"></div>
				<div style="padding-top: 312px;  padding-left: 100px;  float: left;  width: 12px;"><input name="revista" value="12" type="checkbox"></div>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span12">
				<div class="span6" style="font-family: Arial; font-size: 13">
					<img src="http://cludmn.net/14/07/21/3700ad46ab4a17f45387fa18f4c2791d.jpg">
					<p></p>
					<div class="control-group">
						<label class="control-label" for="nombre">Nombres y Apellidos:</label>
						<div class="controls">
							<input type="text" class="input-xlarge required"  name="nombre" id="nombre" placeholder="Nombres y Apellidos" >
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="correo">Correo:</label>
						<div class="controls">
							<input type="text" class="input-xlarge required"  name="correo" id="correo" placeholder="Correo" >
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="telefono">Telefono:</label>
						<div class="controls">
							<input type="text" class="input-xlarge required"  name="telefono" id="telefono" placeholder="Telefono" >
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Facturar:</label>
						<div class="controls">
							<label class="radio inline">
								<input type="radio" name="fact" id="factu" value="0" onclick="controlcampos()" checked="true">No 
							</label>
							<label class="radio inline">
								<input type="radio" name="fact" id="factu" value="1" onclick="controlcampos()">Si
							</label>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="razon">Razón Social:</label>
						<div class="controls">
							<input type="text" class="input-xlarge required"  name="razon" id="razon" placeholder="Razón Social" disabled="disabled">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="ruc">RUC:</label>
						<div class="controls">
							<input type="text" class="input-xlarge required"  name="ruc" id="ruc" placeholder="RUC" disabled="disabled">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="deposito">Número de Depósito:</label>
						<div class="controls">
							<input type="text" class="input-xlarge required"  name="deposito" id="deposito" placeholder="Número de Depósito" disabled="disabled">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="direccion">Dirección:</label>
						<div class="controls">
							<input type="text" class="input-xlarge required"  name="direccion" id="direccion" placeholder="Dirección" >
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="comentarios">Comentarios:</label>
						<div class="controls inline">
							<textarea type="text" class="input-xlarge required" rows="3" name="comentarios" id="comentarios" placeholder="Comentarios"></textarea> 

						</div>
					</div>
					<div id="aviso_sus_cont_1"></div>
					<div id="aviso_sus_error_cont_1"></div>
					<div style='margin-left:240px;width:200px'>
						<button class="btn btn-inverse" type="button" id="borrar" onclick="borrarcampos()" style='margin-left:10px'>Borrar</button><input type="button" style='margin-left:50px' class="btn btn-success" name="enviar" value="Enviar" id="enviar" onclick="enviarform()">
					</div>
					
				</div>

				<div class="span6">
					<p><img src="http://cludmn.net/14/07/24/54970ded50bd2fb67745d2ee9a6662ae.jpg"></p>
					<iframe width="90%" height="315" src="//www.youtube.com/embed/Sn0wG5CI2lU" frameborder="0" allowfullscreen></iframe>
					<p></p>
					<div class="fb-like-box" data-href="https://www.facebook.com/mercadonegro.publicidad?fref=ts" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="false" data-show-border="true"></div>
					<p></p>
					<script src="https://apis.google.com/js/platform.js"></script><div class="g-ytsubscribe" data-channelid="UCX5CezDW1gVYKcMrgWi_j6A" data-layout="default" data-count="hidden"></div>
					<p><a href="http://issuu.com/mercadonegro.pe" target="_blank"><img src="http://cludmn.net/14/07/24/f7eb69aac29a619b97dea1cf42fe1650.jpg" border="0"></a></p>
					<p></p>
				</div>
			</div>
		</div>
		
		<div class="row-fluid" style="text-align:center; margin-top:10px">
			<div data-configid="0/8716666" style="width: 970px; height: 600px;" class="issuuembed"></div><script type="text/javascript" src="//e.issuu.com/embed.js" async="true"></script>
			<a href="http://issuu.com/mercadonegro.pe" target="_blank"><img src="http://cludmn.net/14/07/24/4201e9eb6d1a0bdb850d1b9598db361e.jpg"></a>
		</div>
		<?php echo form_close();?>
	</section>
	<footer>
		<div id="navegacion">
			<div class="row-fluid footerint">
				<div class="span2">
					<p class="footer-msn">
						<a href="http://mercadonegro.pe">MERCADO NEGRO ADVERTISING</a><br> EL MEDIO DE COMUNICACION LIDER DE LA PUBLICIDAD Y MARKETING EN EL PERU
					</p>
				</div>
				<div class="span2 hidden-phone"><img src="<?php echo base_url(); ?>assets/cdn/mn.png"><a href="http://www.mercadonegro.pe" target="_blank">mercadonegro.pe</a></div>
				<div class="span2 hidden-phone"><img src="<?php echo base_url(); ?>assets/cdn/mnrevista.png"><a href="http://issuu.com/mercadonegro.pe" target="_blank">issuu.com/mercadonegro.pe</a></div>
				<div class="span2 hidden-phone"><img src="<?php echo base_url(); ?>assets/cdn/adnewss.png"><a href="http://www.mercadonegro.pe/adnews" target="_blank">mercadonegro.pe/adnews</a></div>
				<div class="span2 hidden-phone"><img src="<?php echo base_url(); ?>assets/cdn/adbolsa.png"><a href="http://www.mercadonegro.pe/adbolsa" target="_blank">mercadonegro.pe/adbolsa</a></div>
				<div class="span2 hidden-phone"><img src="<?php echo base_url(); ?>assets/cdn/adticket.png"><a href="http://www.mercadonegro.pe/adticket" target="_blank">mercadonegro.pe/adticket</a></div>
			</div>
		</div>
	</footer>
	<div id="mdlSuscribir" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="suscribirLabel" aria-hidden="true">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="suscribirLabel">Suscríbete a MercadoNegro</h3>
		</div>
		<div class="modal-body">
			<div class="row-fluid">
				<form>
					<div class="span5">
						<label><strong>Seleccione los productos:</strong></label>
						<label class="checkbox"><input type="checkbox" name="productos[]" id="productos1" value="Portal" required="TRUE"> MerncadoNegro Portal</label>
						<label class="checkbox"><input type="checkbox" name="productos[]" id="productos2" value="TV" required="TRUE"> MercadoNegro TV</label>
						<label class="checkbox"><input type="checkbox" name="productos[]" id="productos3" value="New" required="TRUE"> ADnews</label>
						<label class="checkbox"><input type="checkbox" name="productos[]" id="productos4" value="Bolsa" required="TRUE"> ADbolsa</label>
						<label class="checkbox"><input type="checkbox" name="productos[]" id="productos5" value="Ticket" required="TRUE"> ADticket</label>
					</div>
					<div class="span6">
						<label><strong>Registra tu Email:</strong></label>
						<input class="input-xlarge" type="email" placeholder="Ingresa tu email..." name="mail_sus" id="mail_sus" required>
						<iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fmercadonegro.publicidad&amp;width=292&amp;height=62&amp;colorscheme=light&amp;show_faces=false&amp;border_color&amp;stream=false&amp;header=true&amp;appId=232459596850002" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:62px;" allowtransparency="true"></iframe>
					</div>
					<div class="span12">
						<div id="aviso_sus"></div>
						<div id="aviso_sus_error"></div>
					</div>
				</form>
			</div>
		</div>
		<div class="modal-footer">
			<!--<button id="suscrib" class="btn btn-success btn-block">Suscribir</button>-->
			<button id="suscrib" type="button" class="btn btn-success" data-loading-text="Enviando...">Suscribir</button>
		</div>
	</div>

	<div id="mdlContact" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="contactLabel">Contacto</h3>
		</div>
		<div class="modal-body">
			<form>
				<table width="100%" border="0" cellspacing="2" cellpadding="2">
					<tr>
						<td width="50%">
							<label>Nombres:</label>
							<input type="text" placeholder="Ingresa tu nombre..." class="input-large" name="nombre_cont" id="nombre_cont" required>
						</td>
						<td width="50%">
							<label>Email:</label>
							<input type="email" placeholder="Ingresa tu correo..." class="input-large" name="mail_cont" id="mail_cont" required>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<label>Mensaje:</label>
							<textarea class="span5" rows="3" name="mensaje" id="mensaje" required></textarea>
						</td>
					</tr>
				</table>
				<div class="row-fluid">
					<div class="span6">
						<span class="titulocolum">Contacto</span><br />
						<ul>
							<li><font size="2">prensa@mercadonegro.pe</font></li>
							<li><font size="2">diseno@mercadonegro.pe</font></li>
							<li><font size="2">servicioalcliente@mercadonegro.pe</font></li>
							<li><font size="2">mkt@mercadonegro.pe</font></li>
						</ul>
					</div>
					<div class="span5">
						<span class="titulocolum">Telefono: </span><br />
						<span class="exnoticia"> 628 5992 / 628 5993</span><br />
						<span class="titulocolum">Dirección: </span><br />
						<span class="exnoticia"> Ca. Bayovar Sur 262, Surco, Lima-Perú.</span>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<div id="aviso_sus_cont"></div>
						<div id="aviso_sus_error_cont"></div>
					</div>
				</div>
			</form>
		</div>
		<div class="modal-footer">
			<button id="contac" class="btn btn-success btn-block">Enviar Mensaje</button>
		</div>
	</div>
	<script type="text/javascript" src="http://getbootstrap.com/2.3.2/assets/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/holder.js"></script>
	
	<!-- Google Tag Manager -->
	<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PXD4BG"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-PXD4BG');</script>
	<!-- End Google Tag Manager -->
</body>
</html>