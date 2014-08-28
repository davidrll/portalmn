<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<?php 
		if(is_array($noticiamn)){
			foreach ($noticiamn as $noticia) {
	?>
	<title><?php echo $noticia->titulo; ?> - MERCADO NEGRO</title>
	<?php
			}
		}else{
	?>
	<title>NOTICIA NO ENCONTRADA :( - MERCADO NEGRO TV</title>
	<?php
		}
	?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="robots" content="index,follow"/>
	<meta name="keywords" content="mercadonegro, mercadonegro.pe, filmsperu, filmsperu.pe, mercado negro, publicidad, marketing"/>
	<link href="<?php echo base_url(); ?>assets/css/main.css" rel="stylesheet" media="screen">
	<!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="<?php echo base_url(); ?>assets/js/html5shiv.js"></script>
    <![endif]-->
    <script type="text/javascript">
    	(function($){
		    $('.carousel, #galeriaslider').carousel('pause');
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
		//]]>
	</script>
</head>
<body>
<div class="slide_likebox">
    <div style="color: rgb(255, 255, 255); padding: 8px 5px 0pt 50px;">
        <div class='likeboxwrap'>
            <span><iframe src="http://www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/mercadonegro.publicidad&amp;show_faces=true&amp;header=false&amp;stream=false&amp;width=350&amp;height=350&amp;colorscheme=light&amp;border_color=%23AAAAAA#" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:248px; height:300px;background-color:transparent;"></iframe></span>
        </div>
    </div>
</div>
	<header>
		<div id="menuhead" class="hidden-phone">
			<div id="contenedor">
				<ul>
					<li><a href="<?php echo base_url(); ?>">INICIO</a></li>
					<li><a href="http://issuu.com/mercadonegro.pe" target="_blank">NOTICIAS</a></li>
					<li><a href="http://mercadonegro.pe/adbolsa/" target="_blank">TRABAJO</a></li>
					<li><a href="http://mercadonegro.pe/adticket/" target="_blank">EVENTOS</a></li>
					<li><a href="#myModal" class="suscribir" data-toggle="modal">SUSCRÍBETE</a></li>
				</ul>
				<div class="redeshead">
					<img src="<?php echo base_url(); ?>assets/cdn/redes.jpg" alt="gge" />
				</div>
			</div>
		</div>
		<div id="ads-cabecera" class="hidden-phone">
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
				<div id="importante" class="visible-desktop">
					<a href="http://mercadonegro.pe/nota/247/tendencias-sectores-y-citybranding-sabor-aroma-y-color-con-marca-limea-tendencias-gastronomicas" target="_blank">
						<div class="tituloimp">ESPECIALISTA DE LA SEMANA:</div>
						<div class="contimp"><span class="tituimp">Gema Requena y Futuro Labs</span><br>TENDENCIAS, SECTORES Y CITYBRANDING</div>
						<img src="<?php echo base_url(); ?>New/Images/Columnistas/28843_I_gema_requena_ok_bfb66f.jpg" width="100" height="100" alt="fw" title=""/>
					</a>
				</div>
				<div id="importante" class="visible-desktop separador">
					<a href="http://mercadonegro.pe/noticia/3828/libro-recomendado-de-la-semitica-a-la-publicidad" target="_blank">
						<div class="tituloimp">TE RECOMENDAMOS:</div>
						<div class="contimp"><span class="tituimp">DE LA SEMIÓTICA A LA PUBLICIDAD: </span><br>Escrito por José Peñaloza Salinas</div>
						<img src="<?php echo base_url(); ?>New/Images/SEMIOTICA.jpg" width="100" height="100" alt="fs" title="" />
					</a>
				</div>
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
									<li><a href="#contact" data-toggle="modal">Contacto</a></li>
									<li class="active"><a href="#suscribir" data-toggle="modal">Suscripción</a></li>
								</ul>
								<?php echo form_open('buscar/','class="navbar-search pull-left"');?>
									<i class="icon-search icon-white"></i>
									<input type="text" class="search-query" placeholder="Buscar..." name="titulo" required="TRUE" >
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
		<!-- INICIO DEL CONTENIDO DELPORTAL -->
		<div class="row-fluid">
			<div class="span8">
				<!-- INICIA EL DETALLE DEL VIDEO -->
				<?php 
					if(is_array($noticiamn)){
						foreach ($noticiamn as $noticia) {
							if(empty($noticia->subida)){
								$subida = '';
							}else{
								switch ($noticia->subida) {
									case 'LOCAL':
										$subida = '<span class="catpubli">LOCAL</span>';
										break;
									case 'INTERNACIONAL':
										$subida = '<span class="catpieza">INTERNACIONAL</span>';
										break;
									default:
										$subida = '<span class="catradio">'.$noticia->subida.'</span>';
										break;
								}
							}
				?>
				<article id="mercadonegrotv">
					<!-- COMPARTIR BEGIN -->
					<a class="a2a_dd" href="http://www.addtoany.com/share_save?linkurl=<?php echo "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>&amp;linkname="><img src="<?php echo base_url(); ?>assets/img/share.png" width="20" class="shared" alt="compartir"></a>
					<script type="text/javascript">
						var a2a_config = a2a_config || {};
						a2a_config.linkurl = '<?php echo "http://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]; ?>';
						a2a_config.onclick = 1;
					</script>
					<script type="text/javascript" src="<?php echo base_url().'assets/js/share.js'?>"></script>
					<!-- COMPARTIR END -->
					<div class="feregistro"><?php echo $subida; ?> <span class="fechanoti"><?php echo $noticia->fecha; ?></span></div>
					<h1><?php echo  utf8_encode($noticia->titulo); ?></h1>
					<span class="exnoticia"><?php echo trim(utf8_encode($noticia->contenido)); ?></span>
					<iframe id="f3ba5bdf6" name="f3c6a4a888" scrolling="no" title="Facebook Social Plugin" class="fb_ltr" src="https://www.facebook.com/plugins/comments.php?api_key=227889700694652&channel_url=http://static.ak.facebook.com/connect/xd_arbiter.php?version=40#cb=f13596741c&domain=<?php echo "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>&origin=<?php echo $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>/f3b6f01d98&relation=parent.parent&colorscheme=light&href=http://www.mercadonegro.pe&locale=en_US&numposts=20&sdk=joey&skin=light&width=590" style="border: none; overflow: hidden; height: 160px; width: 100%;"></iframe>
				</article>
				<?php
						} 
					}else{
						echo 'ERROR: La noticia que buscas no existe o fue recientemente eliminada.';
					}
				?>
				<!-- FIN DE LOS CONTENIDOS Y ANUNCIOS -->
			</div>
			<div class="span4">
				<!--<div class="plugin">
					<div class="titulo">DANOS TU <span class="verde">OPINIÓN</span></div>
					<span class="tipregunta">¿Que te parece nuestra nueva página web?</span>
					<form class="encuesta">
						<ol>
							<li><input type="radio"> Muy Buena</li>
							<li><input type="radio"> Buena</li>
							<li><input type="radio"> Normal</li>
							<li><input type="radio"> Mala</li>
							<li><input type="radio"> Muy Mala</li>
						</ol>
						<button class="btn btn-small btn-primary" type="button">Enviar</button>
					</form>
				</div>-->
				<div class="plugin">
					<div class="titulo">EMPLEO</div>
					<iframe src="http://mercadonegro.pe/New/View/includes/adbolsa.php" width="260" height="360" frameborder="0" scrolling="no"> </iframe>

				</div>

				<div class="plugin">
					<div class="titulo">EDICIÓN IMPRESA <span class="verde">ADNEWS</span></div>
					<div id="myCarousel" class="carousel slide">
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
							<li data-target="#myCarousel" data-slide-to="3"></li>
							<li data-target="#myCarousel" data-slide-to="4"></li>
							<li data-target="#myCarousel" data-slide-to="5"></li>
							<li data-target="#myCarousel" data-slide-to="6"></li>
						</ol>
						<!-- Carousel items -->
						<div class="carousel-inner">
							<!--<div class="active item"><a href="http://issuu.com/mercadonegro.pe/docs/adnews17_final" target="_blank"><img src="http://image.issuu.com/140306161557-59e54982581a63340df2146c7779636d/jpg/page_1_thumb_large.jpg"></a></div>
							<div class="item"><a href="http://issuu.com/mercadonegro.pe/docs/adnews16baja" target="_blank"><img src="http://image.issuu.com/140207152908-37edb4fc4b9943a10aa7feed8a1598b6/jpg/page_1_thumb_large.jpg"></a></div>
							<div class="item"><a href="http://issuu.com/mercadonegro.pe/docs/mn16_ladoa_baja" target="_blank"><img src="<?php echo base_url(); ?>assets/cdn/impresa1.jpg"></a></div>
							<div class="item"><a href="http://issuu.com/mercadonegro.pe/docs/adnews_15-issuu2" target="_blank"><img src="<?php echo base_url(); ?>assets/cdn/impresa2.jpg"></a></div>
							<div class="item"><a href="http://issuu.com/mercadonegro.pe/docs/adnews_14-issuu" target="_blank"><img src="<?php echo base_url(); ?>assets/cdn/impresa3.jpg"></a></div>
							<div class="item"><a href="http://issuu.com/mercadonegro.pe/docs/adnews_13-issuu" target="_blank"><img src="<?php echo base_url(); ?>assets/cdn/impresa4.jpg"></a></div>
							<div class="item"><a href="http://issuu.com/mercadonegro.pe/docs/adnews_12final_issuu2" target="_blank"><img src="<?php echo base_url(); ?>assets/cdn/impresa5.jpg"></a></div>
							<div class="item"><a href="http://issuu.com/mercadonegro.pe/docs/adnews_11-issuu" target="_blank"><img src="<?php echo base_url(); ?>assets/cdn/impresa6.jpg"></a></div>-->
							<?php foreach ($impresa as $impre) {?>
							<div class="<?php foreach ($maximpresa as $key) {if( $key->cod == $impre->codigo){echo 'active';}else{echo ' ';}}?> item"><a href="<?php echo $impre->url_pag;?>" target="_blank"><img src="<?php echo $impre->url_foto;?>"></a></div>
								
							<?php }?>
						</div>
						<!-- Carousel nav -->
						<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
						<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
					</div>
				</div>

				<div class="plugin columnistas">
					<div class="titulo">PALABRA <span class="verde">AUTORIZADA</span></div>
					<?php 
						if(is_array($especialistas)){
							foreach ($especialistas as $especialista) {
								$urlEspecialista = Buscador::urlamigable(utf8_encode($especialista->nombres));
								#Controlo que el Cargo no sea muy extenso
								if(strlen($especialista->cargo) > 50){
									$especialista->cargo = substr(utf8_encode($especialista->cargo), 0, 50).'...';
								}
								$urlNota = Buscador::urlamigable(utf8_encode($especialista->titulocolum));
					?>
					<div class="especialista">
						<img src="http://mercadonegro.pe/New/Images/Columnistas/<?php echo $especialista->fotoesp; ?>" alt="fw" title=""/>
						<span class="noespecialista"><?php echo utf8_encode($especialista->nombres); ?></span><br>
						<span class="exespecialista"><?php echo $especialista->cargo; ?></span><br>
						<span class="btnmasesp"><a href="<?php echo base_url().'especialista/'.$especialista->codigo.'/'.$urlEspecialista;?>">más del autor</a></span>
							<?php 
								if(!empty($especialista->titulocolum) && !empty($especialista->desc_colum)){
									#Controlo la longitud del Título de la Columna
									if(strlen(utf8_encode($especialista->titulocolum)) > 30){
										$especialista->titulocolum = substr(utf8_encode($especialista->titulocolum), 0, 30).'...';
									}

									if(strlen($especialista->desc_colum) > 140){
										$especialista->desc_colum = substr(utf8_encode($especialista->desc_colum), 0, 140).'...';
									}
							?>
						<div class="columnaesp">
							<span class="titulocolum"><a href="<?php echo base_url().'nota/'.$especialista->codigo.'/'.$urlNota;?>"><?php echo utf8_encode($especialista->titulocolum); ?></a></span>
							<span class="excolumna"><?php echo trim($especialista->desc_colum); ?></span>
						</div>
							<?php
								}
							?>
					</div>
					<?php
							} 
						} 
					?>
				</div>

				<div class="adslarge"><img src="<?php echo base_url(); ?>assets/cdn/adscuadrado.jpg"></div>
				<div id="buscadordmpmini" class="plugin">
					<a href="http://dmp.pe" target="_blank"><div style="width:270px;margin-left:25px;height:110px;margin-top:30px"></div></a>
					<div class="titulo">PALABRA <span class="verde">AUTORIZADA</span></div>
					<form class="form-vertical" action="http://dmp.pe/buscar" target="_blank">
						<select id="txtRubroVertical" name="rubro">
							<option value="">Seleccionar Rubro</option>
							<optgroup label="PUBLICIDAD">
								<option value="12_agencias-atl-publicidad">Agencias ATL | Publicidad</option>
								<option value="9_agencias-btl-activaciones-samplings">Agencias BTL | Activaciones | Samplings</option>
								<option value="160_agencias-de-diseno-grafico-boutiques-talleres-graficos">AGENCIAS DE DISEÑO GRAFICO / BOUTIQUES / TALLERES GRAFICOS</option>
								<option value="38_agencias-de-diseno-branding-boutiques-web-multimedia">Agencias de Diseño | Branding | Boutiques | Web | Multimedia</option>
								<option value="11_agencias-de-medios-centrales-de-medios">Agencias de Medios | Centrales de Medios</option>
								<option value="13_agencias-de-rrpp-pp-aa-medios-de-comunicacion-eventos-corporativos">Agencias de RR.PP | PP. AA | Medios de Comunicación | Eventos corporativos</option>
								<option value="10_agencias-digitales-interactivas">Agencias Digitales Interactivas</option>
								<option value="14_alquiler-o-venta-de-equipos-filmaciones-grupos-electrogenos">Alquiler o Venta de Equipos | Filmaciones | Grupos Electrógenos</option>
								<option value="114_arquitectura-publicitaria">Arquitectura Publicitaria</option>
								<option value="139_asistente-2do-de-camara">Asistente 2do de Cámara</option>
								<option value="138_asistentes-de-camara">Asistentes de Cámara</option>
								<option value="132_asistentes-de-direccion">Asistentes de Dirección</option>
								<option value="136_asistentes-de-produccion">Asistentes de Producción</option>
								<option value="141_asociaciones">Asociaciones</option>
								<option value="47_audio-casas-de-audio-estudios-de-audio">Audio: Casas de Audio | Estudios de Audio</option>
								<option value="23_banco-de-imagenes">Banco de Imágenes</option>
								<option value="24_banos-portatiles-para-filmaciones-eventos">Baños Portátiles para filmaciones | Eventos</option>
								<option value="29_buffet-catering">Buffet | Catering</option>
								<option value="30_capacitacion-publicidad-comunicaciones-diseno">Capacitación Publicidad | Comunicaciones | Diseño</option>
								<option value="59_casas-de-post-produccion-3d-2d-stop-motion">Casas de Post - Producción | 3D | 2D | Stop Motion</option>
								<option value="26_casas-realizadoras-productoras-de-cine-publicitario">Casas Realizadoras | Productoras de Cine Publicitario</option>
								<option value="130_casting-locaciones">Casting Locaciones</option>
								<option value="90_casting-modelos-extras">Casting Modelos | Extras</option>
								<option value="129_casting-y-adiestramiento-de-animales">Casting y Adiestramiento de Animales</option>
								<option value="135_direccion-de-actores">Dirección de Actores</option>
								<option value="134_direccion-de-arte">Dirección de Arte</option>
								<option value="71_direccion-de-arte-vestuaristas-alquiler-de-ropa-disfraces-utileros">Dirección de arte | Vestuaristas | Alquiler de ropa | Disfraces | Utileros</option>
								<option value="133_direccion-de-fotografia">Dirección de Fotografía</option>
								<option value="131_directores-de-cine-publicitario">Directores de Cine Publicitario</option>
								<option value="40_economas-tratamiento-de-comidas">Ecónomas | Tratamiento de comidas</option>
								<option value="41_efectistas-en-campo-tratamiento-de-producto">Efectistas en campo | Tratamiento de producto</option>
								<option value="165_equipos-para-cine-publicitario-rentals-càmaras-luces">Equipos para cine publicitario / Rentals: Càmaras / Luces</option>
								<option value="39_escenografias-estructuras-dummies">Escenografías | Estructuras | Dummies</option>
								<option value="157_estudio-de-fotografia-filmacion">ESTUDIO DE FOTOGRAFIA/ FILMACION</option>
								<option value="118_estudios-de-filmacion">Estudios de Filmación</option>
								<option value="88_fotografia-profesional-para-catalogos-publicidad-documental-moda-industr">Fotografía Profesional para Catálogos | Publicidad | Documental | Moda | Industr</option>
								<option value="111_iluminacion-profesional-en-cine-publicitario">Iluminación Profesional en Cine Publicitario</option>
								<option value="110_impresiones-de-banner-y-gigantografias-offset-digital-imprentas-ploteos">Impresiones de banner y Gigantografías | Offset | Digital | Imprentas | Ploteos</option>
								<option value="120_locutores">Locutores</option>
								<option value="48_maquillaje-publicitario-efectos-de-maquillaje-bronceados-trat-de-piel-y-ca">Maquillaje Publicitario | Efectos de maquillaje | Bronceados | Trat de piel y ca</option>
								<option value="116_medios-alternativos">Medios Alternativos</option>
								<option value="125_medios-de-comunicacion-escrito">Medios de Comunicación | Escrito</option>
								<option value="126_medios-de-comunicacion-on-line">Medios de Comunicación | ON - LINE</option>
								<option value="56_medios-de-comunicacion-radio">Medios de Comunicación | Radio</option>
								<option value="127_medios-de-comunicacion-tv">Medios de Comunicación | TV</option>
								<option value="57_movilidad-para-equipos-y-camaras-personal-especiales">Movilidad para Equipos y Cámaras | Personal | Especiales</option>
								<option value="117_papeleria-fina">Papelería Fina</option>
								<option value="137_produccion-tecnica">Producción Técnica</option>
								<option value="61_productores-de-publicidad">Productores de Publicidad</option>
								<option value="163_programas-de-incentivos-y-motivacion-crm-coaching">PROGRAMAS DE INCENTIVOS Y MOTIVACION / CRM / COACHING</option>
								<option value="124_publicidad-aerea">Publicidad Aérea</option>
								<option value="121_publicidad-exterior-outdoor">Publicidad Exterior | Outdoor</option>
								<option value="122_publicidad-interior-indoor">Publicidad Interior | Indoor</option>
								<option value="62_publicidad-movil">Publicidad Móvil</option>
								<option value="65_seguridad-para-filmaciones-eventos">Seguridad para Filmaciones | Eventos</option>
								<option value="91_storyboards-dibujo-del-guion-tecnico-ilustracion">Storyboards | Dibujo del guión Técnico | Ilustración</option>
								<option value="113_tecnicos-luminotecnicos">Técnicos | Luminotécnicos</option>
							</optgroup>
							<optgroup label="MARKETING">
								<option value="69_anfitrionas-promotoras">Anfitrionas | Promotoras</option>
								<option value="16_articulos-promocionales-merchandising">Artículos Promocionales | Merchandising</option>
								<option value="25_base-de-datos">Base de Datos</option>
								<option value="99_centros-de-estudios-con-especial-en-marketing">Centros de Estudios con especial en Marketing</option>
								<option value="31_comercio-electronico-e-commerce">Comercio Electrónico | E- commerce</option>
								<option value="68_estudios-de-diseno-grafico-branding">Estudios de Diseño Gráfico | Branding</option>
								<option value="36_estudios-de-diseno-web">Estudios de Diseño Web</option>
								<option value="97_fotografia-profesional-imagenes">Fotografía Profesional | Imágenes</option>
								<option value="45_imprentas-offset-digital-ploteos-viniles">Imprentas (Offset, digital, ploteos, viniles)</option>
								<option value="46_investigacion-de-mercado">Investigación de Mercado</option>
								<option value="159_investigacion-de-mercado-consultoria-medicion-monitoreo">INVESTIGACION DE MERCADO / CONSULTORIA / MEDICION / MONITOREO</option>
								<option value="92_marketing-btl">Marketing BTL</option>
								<option value="161_marketing-digital">MARKETING DIGITAL</option>
								<option value="49_marketing-directo">Marketing Directo</option>
								<option value="50_marketing-internet-interactivo">Marketing Internet | Interactivo</option>
								<option value="51_marketing-promocional">Marketing Promocional</option>
								<option value="96_mensajeria-courier">Mensajería | Courier</option>
								<option value="94_programas-de-incentivos-y-motivacion-al-personal-coaching">Programas de incentivos y Motivación al personal | Coaching</option>
								<option value="64_puntos-de-venta">Puntos de Venta</option>
								<option value="100_relaciones-publicas">Relaciones Públicas</option>
								<option value="66_servicios-multimedia-desarrollos-de-contenidos-virtuales">Servicios Multimedia | Desarrollos de Contenidos Virtuales</option>
								<option value="98_sistema-de-registros-fotochecks-carnets">Sistema de Registros | Fotochecks | Carnets</option>
								<option value="119_telemarketing-agencias-y-equipos">Telemarketing | Agencias y equipos</option>
							</optgroup>
							<optgroup label="EVENTOS">
								<option value="73_anfitrionas-para-eventos">Anfitrionas para eventos</option>
								<option value="105_articulos-promocionales-regalos-merchandising">Artículos Promocionales | Regalos | Merchandising</option>
								<option value="112_back-stage-movil-campers-bus-para-filmaciones-con-banos-y-aire-acondicionado">Back Stage Móvil | Campers | Bus para filmaciones con baños y aire acondicionado</option>
								<option value="104_banos-portatiles">Baños portátiles</option>
								<option value="74_buffet-y-menaje-para-eventos">Buffet y Menaje para eventos</option>
								<option value="78_centro-de-convenciones">Centro de Convenciones</option>
								<option value="103_centros-deportivos">Centros Deportivos</option>
								<option value="162_decoracion-estructuras-escenografias-climatizacion-iluminacionsalasmueblesloungetoldos-sillas-y-menaje">DECORACION / ESTRUCTURAS / ESCENOGRAFIAS / CLIMATIZACION ,ILUMINACION,SALAS,MUEBLES,LOUNGE/TOLDOS / SILLAS Y MENAJE</option>
								<option value="143_efectos-especiale0s-fuegos-artificiales">EFECTOS ESPECIALE0S / FUEGOS ARTIFICIALES</option>
								<option value="76_equipos-electrogenos">Equipos Electrógenos</option>
								<option value="75_estructuras-y-decoracion">Estructuras y decoración</option>
								<option value="155_ferias-stands-y-mÒdulos">FERIAS / STANDS Y MÒDULOS</option>
								<option value="106_fotografos-para-eventos">Fotógrafos para eventos</option>
								<option value="101_hoteles">Hoteles</option>
								<option value="108_maestro-de-ceremonias-y-presentadores">Maestro de ceremonias y presentadores</option>
								<option value="109_magos-mimos">Magos | Mimos</option>
								<option value="142_mozos-y-bartenders">Mozos y Bartenders</option>
								<option value="72_pantallas-de-proyeccion-equipo-de-sonido-filmacion-y-produccion">Pantallas de Proyección, Equipo de Sonido, Filmación y Producción</option>
								<option value="77_productoras-organizadoras-de-eventos-servicios-complementarios-para-eventos">Productoras | Organizadoras de Eventos | Servicios Complementarios para Eventos</option>
								<option value="93_recreacionales">Recreacionales</option>
								<option value="102_restaurantes">Restaurantes</option>
								<option value="164_salones-y-locaciones">Salones y Locaciones</option>
								<option value="107_seguridad-para-eventos">Seguridad para eventos</option>
								<option value="158_servicios-de-filmacion-edicion-y-produccion">SERVICIOS DE FILMACION , EDICION Y PRODUCCION</option>
								<option value="79_shows-musicales-y-espectaculos">Shows musicales y espectáculos</option>
								<option value="80_sistema-de-registro-fotochecks">Sistema de Registro | Fotochecks</option>
								<option value="144_sistema-y-servicios-de-climatizacion">Sistema y Servicios de Climatización</option>
								<option value="140_traduccion-para-eventos">Traducción para Eventos</option>
							</optgroup>
							<optgroup label="CENTROLIMA">
								<option value="150_articulos-promocionales-serigrafiado-grabados-otros">Artículos Promocionales: Serigrafiado / Grabados / Otros</option>
								<option value="148_diseno-grafico-web">Diseño Gráfico / Web</option>
								<option value="152_impresion-digital-servicios-de-acabados">Impresión Digital &amp; Servicios de Acabados</option>
								<option value="153_impresion-gigantografias">Impresión Gigantografías</option>
								<option value="149_impresion-offset">Impresión Offset</option>
								<option value="146_insumos-y-suministros">Insumos y Suministros</option>
								<option value="154_letreros-rotulados">Letreros &amp; Rotulados</option>
								<option value="145_servicio-tecnico-y-venta-de-equipos">Servicio técnico y venta de equipos</option>
								<option value="147_servicios-audiovisuales">Servicios Audiovisuales</option>
								<option value="151_servicios-de-preprensa">Servicios de Pre-prensa</option>
							</optgroup>
						</select>
						<div class="control-group-vertical">
						          <input name="texto" type="text" id="txtTextoVertical" placeholder="Escriba aqui">
						          <input type="hidden" name="search" value="yes">
						          <button type="submit" class="btn btn-danger">Enviar</button>
						</div>
						<div class="botonesdmp" style="margin-top:60px">
							<a href="http://dmp.pe/buscar/texto/publicidad" target="_blank"><div></div></a>
							<a href="http://dmp.pe/buscar/rubro/47_audio-casas-de-audio-estudios-de-audio" target="_blank"><div></div></a>
							<a href="http://dmp.pe/buscar/texto/eventos" target="_blank"><div></div></a>
							<a href="http://dmp.pe/buscar/centrolima" target="_blank"><div></div></a>
							<a href="http://dmp.pe/registrar-empresa" target="_blank"><div style="width:160px;height:30px;margin-left:63px;margin-top:32px"></div></a>
						</div>
					</form>
				</div>
				<div class="adslarge"><img src="<?php echo base_url(); ?>assets/cdn/adsminilarge.jpg"></div>
			</div>
		</div>
		<!--
		<div class="galeriacont hidden-phone">
			<img src="<?php echo base_url(); ?>assets/cdn/titulo-galeria.png" class="titulogaleria">
			<div class="contenedorgaleria" id="galeriaslider" class="slide">
				<div class="carousel-inner">
					<div class="active item">
						<div class="galeiaint">
							<img src="<?php echo base_url(); ?>assets/cdn/gal1.jpg" />
						</div>
						<div class="galeiaint">
							<img src="<?php echo base_url(); ?>assets/cdn/gal2.jpg" />
						</div>
						<div class="galeiaint">
							<img src="<?php echo base_url(); ?>assets/cdn/gal1.jpg" />
						</div>
						<div class="galeiaint">
							<img src="<?php echo base_url(); ?>assets/cdn/gal1.jpg" />
						</div>

						<div class="galeiaint">
							<img src="<?php echo base_url(); ?>assets/cdn/gal1.jpg" />
						</div>
						<div class="galeiaint">
							<img src="<?php echo base_url(); ?>assets/cdn/gal1.jpg" />
						</div>
						<div class="galeiaint">
							<img src="<?php echo base_url(); ?>assets/cdn/gal1.jpg" />
						</div>
						<div class="galeiaint">
							<img src="<?php echo base_url(); ?>assets/cdn/gal1.jpg" />
						</div>
					</div>

					<div class="item">
						<div class="galeiaint">
							<img src="<?php echo base_url(); ?>assets/cdn/gal1.jpg" />
						</div>
						<div class="galeiaint">
							<img src="<?php echo base_url(); ?>assets/cdn/gal1.jpg" />
						</div>
						<div class="galeiaint">
							<img src="<?php echo base_url(); ?>assets/cdn/gal1.jpg" />
						</div>
						<div class="galeiaint">
							<img src="<?php echo base_url(); ?>assets/cdn/gal1.jpg" />
						</div>

						<div class="galeiaint">
							<img src="<?php echo base_url(); ?>assets/cdn/gal1.jpg" />
						</div>
						<div class="galeiaint">
							<img src="<?php echo base_url(); ?>assets/cdn/gal1.jpg" />
						</div>
						<div class="galeiaint">
							<img src="<?php echo base_url(); ?>assets/cdn/gal1.jpg" />
						</div>
						<div class="galeiaint">
							<img src="<?php echo base_url(); ?>assets/cdn/gal1.jpg" />
						</div>
					</div>
				</div>
				<a class="carousel-control left" href=".galeriacont" data-slide="prev">&lsaquo;</a>
				<a class="carousel-control right" href=".galeriacont" data-slide="next">&rsaquo;</a>
			</div>

			<div class="vertodo"><a href="<?php echo base_url(); ?>galeria/">ver todo</a></div>
		</div>
		-->
		<!-- FIN DEL CONTENIDO DEL PORTAL -->
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
	<div id="suscribir" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="suscribirLabel" aria-hidden="true">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="suscribirLabel">Suscríbete a MercadoNegro</h3>
		</div>
		<div class="modal-body">
			<div class="row-fluid">
				<form>
					<div class="span5">
						<label><strong>Seleccione los productos:</strong></label>
						<label class="checkbox"><input type="checkbox" name="productos" value="1"> MerncadoNegro Portal</label>
						<label class="checkbox"><input type="checkbox" name="productos" value="2"> MercadoNegro TV</label>
						<label class="checkbox"><input type="checkbox" name="productos" value="3"> ADnews</label>
						<label class="checkbox"><input type="checkbox" name="productos" value="4"> ADbolsa</label>
						<label class="checkbox"><input type="checkbox" name="productos" value="5"> ADticket</label>
					</div>
					<div class="span6">
						<label><strong>Registra tu Email:</strong></label>
						<input class="input-xlarge" type="email" placeholder="Ingresa tu email..." required>
						<iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fmercadonegro.publicidad&amp;width=292&amp;height=62&amp;colorscheme=light&amp;show_faces=false&amp;border_color&amp;stream=false&amp;header=true&amp;appId=232459596850002" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:62px;" allowtransparency="true"></iframe>
					</div>
				</form>
			</div>
		</div>
		<div class="modal-footer">
			<button id="btnsuscribir" class="btn btn-success">Suscribir</button>
		</div>
	</div>

	<div id="contact" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
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
							<input type="text" placeholder="Ingresa tu nombre..." class="input-large">
						</td>
						<td width="50%">
							<label>Email:</label>
							<input type="email" placeholder="Ingresa tu correo..." class="input-large" required>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<label>Mensaje:</label>
							<textarea class="span5" rows="3"></textarea>
						</td>
					</tr>
				</table>
			</form>
		</div>
		<div class="modal-footer">
			<button id="btnsuscribir" class="btn btn-success">Enviar Mensaje</button>
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