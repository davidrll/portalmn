<?
	include "config/cn.php";
	include "config/function.php";/*funcion para obtener formato de fecha*/
	
	$con=new ClaseCon();
	$cn=$con->fcConectar();		
?>
<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <title>Bienvenido a AdTicket</title>
  
  <!-- Included CSS Files (Uncompressed) -->
  <!--
  <link rel="stylesheet" href="stylesheets/foundation.css">
  -->
  
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="stylesheets/foundation.min.css">
  <link rel="stylesheet" href="stylesheets/app.css">
  <!--estilos adticked-->
  <link rel="stylesheet" href="css/stylesadticked.css">
  <link href="css/layout.css" rel="stylesheet" type="text/css">	
  <script src="javascripts/modernizr.foundation.js"></script>
 <!---FIN ARCHIVOS POR DEFECTO 1 DE ARCHIVOS FUNDATION--->
  
  
  
  
<!--  FOUNDATION TAB ESTABA UBICADO EN ANTES DEL </BODY> FINAL, SE SUBIO PARA EVITAR CONFLICTOS DEL TAB CON EL CALENDARIO UI-->
          <!-- Included JS Files (Compressed) -->
         
         <!--  SE OMITIO PARA QUE FUNCIONE EL CALENDARIO
         <script src="javascripts/jquery.js"></script>-->
         
           <script src="javascripts/foundation.min.js"></script>
           <!-- Initialize JS Plugins -->
           
           <!--  SE OMITIO PARA QUE FUNCIONE EL CALENDARIO-->
          <script src="javascripts/app.js"></script>
        
          <!--  SE OMITIO PARA QUE FUNCIONE EL CALENDARIO -->
            <script>
            $(window).load(function(){
              $("#featured").orbit();
            });
            </script>
 <!--FIN FOUNDATION  ESTABA UBICADO EN ANTES DEL </BODY> FINAL, SE SUBIO PARA EVITAR CONFLICTOS DEL TAB CON EL CALENDARIO UI-->
  
  
  
  
  
  
  
  
  
  
  
  
  <!--FLEXSLIDER2-->    
    
    <!-- Syntax Highlighter -->
  <link href="css/shCore.css" rel="stylesheet" type="text/css" />
  <link href="css/shThemeDefault.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

  <!-- Modernizr -->
  <script src="js/modernizr.js"></script>
    <!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>
  
  <!-- FlexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>
  
  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>

  <!-- Syntax Highlighter -->
  <script type="text/javascript" src="js/shCore.js"></script>
  <script type="text/javascript" src="js/shBrushXml.js"></script>
  <script type="text/javascript" src="js/shBrushJScript.js"></script>
  
  <!-- Optional FlexSlider Additions -->
  <script src="js/jquery.easing.js"></script>
  <script src="js/jquery.mousewheel.js"></script>
  <script defer src="js/demo.js"></script>
    
<!--FIN DATOS FLEXSLIDER2-->    

  
  
  
  
  
  
  
  
  <!-- Calendario------------------------------------------------------------------------------------->
<!-- loads jquery and jquery ui -->
		<script type="text/javascript" src="multicalendar/js/jquery-1.7.2.js"></script>
		<script type="text/javascript" src="multicalendar/js/jquery.ui.core.js"></script>
		<script type="text/javascript" src="multicalendar/js/jquery.ui.datepicker.js"></script>
		<!-- script type="text/javascript" src="js/jquery.ui.datepicker-es.js"></script -->
		
		<!-- loads mdp -->
		<script type="text/javascript" src="multicalendar/jquery-ui.multidatespicker.js"></script>
		
		<!-- mdp demo code -->
		<script type="text/javascript">
		<!--
			/*var latestMDPver = $.ui.multiDatesPicker.version;
			var lastMDPupdate = '2012-03-28';
			*/
			$(function() {
				$('#withaltField').multiDatesPicker({
						altField: '#altField'
					});
				
					
			});
			$(function() {
					$('#withaltField').multiDatesPicker({
			maxPicks: 1
			});});
			
			
			
		// -->
		</script>
		
		<!-- loads some utilities (not needed for your developments) -->
		<link rel="stylesheet" type="text/css" href="multicalendar/css/mdp.css">
        <link rel="stylesheet" type="text/css" href="multicalendar/css/pepper-ginder-custom.css">
		<link rel="stylesheet" type="text/css" href="multicalendar/css/prettify.css">
		<script type="text/javascript" src="multicalendar/js/prettify.js"></script>
		<script type="text/javascript" src="multicalendar/js/lang-css.js"></script>
		<script type="text/javascript">
		$(function() {
			prettyPrint();
		});
		</script>

<!----fin multicalendario-------------->
		
		
</head>
<body>
<!--codigo facebook box-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=232459596850002";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--fin codigo facebook box-->
    <header>
      <div class="row">
            <div class="three columns">
             <div id="logo">
              			<a href="index.php"><img src="images/logo.png"></a><br>                        
                    	<a href="http://mercadonegro.pe"><img  src="images/unproductomn.png" ></a>
                        <br><br><br>
                        
              			<div style="clear:both;"></div>      	
           	  </div>
              <!--<hr />BORDE BOTTOM-->
            </div>
               
        	<div class="nine columns">
            		<nav id="menu" class="twelve columns">
                    <ul>
                        <li><a href="index.php">INICIO</a></li>
                        <li><a href="que-es-adticket.php">QUÉ ES ADTICKET</a></li>
                        <li><a href="anuncia-tu-evento.php">ANUNCIA TU EVENTO</a></li>
                        <li><a href="contacto.php">CONTACTO</a></li>
                        <!--<li id="right"><a href="#">&nbsp;</a></li>-->
                    </ul>
            		</nav>
                    <div id="banner1">
            	<!--<div class="twelve columns" >-->
                	<?
						#PUBLICIDAD
                    	$sql_p="select * from publicidad where publicidad_estado=1 limit 1";
						$query_p=$con->fcEjecutarConsulta($sql_p,$cn)or die("Error de MySQL: ".mysql_error());							
						$row_p=$con->fcFetch_array($query_p);
						echo "<a href='".$row_p["publicidad_enlace"]."'><img id='publicidad' src='mantenimiento/publicidad/".$row_p["publicidad_img"]."'></a>";
					?>
                   <br> 
                   </div>            
               <!-- </div>-->
            	<!--<div id="sociales" class="three columns">
                		   <div class="fono">
                                   <div class="flot"><img src="images/fono.png" ></div>
                                    <div class="flot">
                                        <div>Delivery</div>
                                        <div class="numero">620&nbsp;-&nbsp;3040</div>
                                    </div>
                                    <div style="clear:both;"></div>
                           </div> 
                           <div id="lista_sociales">
                               			<div id="siguenos">Síguenos</div>
                                        <ul>   
                                                        
                                            <li><a href="#"><img src="images/fb.jpg" alt="facebook" ></a></li>
                                            <li><a href="#"><img src="images/tw.jpg" alt="twitter" ></a></li>
                                            <li><a href="#"><img src="images/yt.jpg" alt="youtube" ></a></li>                   
                                        </ul>
                                        <div style="clear:both;"></div>
                           </div>
                </div>
                -->  
            
                <div  id="sociales">
                        <table width="210" border="0" align="right"  cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="120"  align="right">
                                    <div class="fb-like" data-href="http://www.facebook.com/mercadonegro.publicidad" data-send="false" data-layout="button_count" data-width="120" data-show-faces="false"></div>
                            </td>
                            <td width="90" align="right">
                                    <a href="https://twitter.com/share" class="twitter-share-button" data-via="mercado_negro" data-lang="es" data-related="mercado_negro">Twittear</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                            </td>
                          </tr>
                        </table>
    
                        
                        
                </div>
           		<!--fin sociales-->  <br><br> <br><br>
      		</div>
      </div>
       <!--FIN ROW-->
    </header>
    <!--fin header-->

	<div class="row">
    	<div class="three columns">  
        	  <div id="categorias">             
                    <div id="titulo_cat">CATEGORÍAS</div>
                         <ul>                	
                            <? 
                                                $sql_c="select * from categoria order by cat_nombre asc";
                                                $query_c=$con->fcEjecutarConsulta($sql_c,$cn)or die("Error de MySQL: ".mysql_error());		
                                                                                        
                                                while($row_c=$con->fcFetch_array($query_c)){
                                                    ?>
                                                    <li>
                                                      <a href="categoria_lista_eventos.php?cat_id=<?= $row_c["cat_id"];?>"/><?= $row_c["cat_nombre"];?></a>
                                                    </li>
                                             <? }?>       
                        </ul>  
              </div>
              <div id="calendario">
                     <div id="titulo_cal" >CALENDARIO 2013</div>
                    <!--<form action="calendario_lista_eventos.php" method="post">
                                <div style="margin:0 auto; width:204px;"><div id="withaltField"></div></div>
                                <input name="altField" type="hidden"  id="altField" />
                                <input name="Consultar" id="boton_consultar" type="submit" value="Consultar">
                      </form>-->
                     <div id="calendario_contenido">
                        <ul>
                            
                            <?   $fecha_actual=date("Y-m-d");
                            
                                $sql_cal="select * from evento where evento_fecha>= DATE_FORMAT(NOW(),'%Y-%m-%d 00:00:00') and evento_estado=1 order by evento_fecha asc";
                                $query_cal=$con->fcEjecutarConsulta($sql_cal,$cn)or die("Error de MySQL: ".mysql_error());		
                                while($row_cal=$con->fcFetch_array($query_cal)){
                            ?>
                                   <li onMouseOver="<?=$row_cal["evento_direccion"]." - ".substr($row_cal["evento_descripcion"],0,100);?>">
                                        <a href="evento_detalle.php?evento_id=<?= $row_cal["evento_id"];?>"/>
                                                <span class="rojo">
											<?
                                            
											/*$mes=substr($row_cal["evento_fecha"],5,2);
											$dia=substr($row_cal["evento_fecha"],8,11);
											*/
											echo formato_fecha($row_cal["evento_fecha"]);
											
												
											?>
                                            </span>
                                                <?= $row_cal["evento_nombre"];?>
                                        </a>
                                   </li>
                            <? }?> 						
                        </ul>
                     </div>
			 	 </div>           
             	 <!--fin calendario-->
              <div id="banner5">
              			<div class="fb-like-box" data-href="http://www.facebook.com/mercadonegro.publicidad" data-width="206" data-show-faces="true" data-stream="false" data-header="false"></div>
                        <!--fin caja facebook-->
              </div>     
     	<!--<hr />BORDE BOTTOM-->
        </div>
        <!--FIN CATEGORIAS-->
      
         <div id="panel-contenido" class="nine columns">
         	<!-- <nav id="menu2" class="twelve columns">
                    <ul>
                        <li><a href="#">DESTACADOS</a></li>
                        <li><a href="#">PUBLICIDAD</a></li>
                        <li><a href="#">MARKETING</a></li>
                        <li><a href="#">CREATIVIDAD</a></li>
                        <li><a href="#">DISEÑO</a></li>
                        <li><a href="#">DIGITAL</a></li>
                        <li><a href="#">RETAIL</a></li>    
                        <li><a href="#">BTL&EVENTOS </a> </li>
                        <li><a href="#">AUDIOVISUAL</a></li>                                      
                    </ul>
            </nav>-->
            <!--fin menu2-->  
          
            <section id="destacados" class="twelve columns">
                                    <div class="flexslider">
                                     <div style="position:absolute; top:200px; left:150px;"></div>
                                      <ul class="slides">
                                      	<? 
											$sql_d="select evento_imgG, evento_id from evento where evento_destacar=1 and evento_estado=1 order by evento_id desc limit 4";
											$query_d=$con->fcEjecutarConsulta($sql_d,$cn)or die("Error de MySQL: ".mysql_error());		
																		            
											while($row_d=$con->fcFetch_array($query_d)){
												?>
												<li>
												  <a href="evento_detalle.php?evento_id=<?= $row_d["evento_id"];?>"><img src="mantenimiento/imgServer/evento/<?= $row_d["evento_imgG"];?>" /></a>
												</li>
										 <? }?>                                         
                                      </ul>
                                   
                                    </div>
            </section> 
         
             <!--fin destacados-->
         	<div class="nine columns" id="lista_eventos">
                        <dl class="tabs">
                          <dd class="active"><a href="#simple1" class="titulo_tab">NACIONALES</a></dd>
                          <dd><a href="#simple2"  class="titulo_tab">INTERNACIONALES</a></dd>                         
                        </dl>
                        <ul class="tabs-content">
                          <li class="active" id="simple1Tab">
                                         
                          								<? 				
																		//****************** CONSULTA , CON PAGINACION NACIONALES
																		$regxpag=10;
																		
																		if(!isset($_REQUEST['pagina'])){
																			$pagina=0;
																		}else{
																			$pagina=$_REQUEST['pagina']; 
																		}
																		$regini=$pagina * $regxpag; 
																	    $sql="select * from evento where evento_tipo=1 and evento_estado=1 order by evento_fecha asc";
																		$sqlb=" limit $regini,$regxpag";
																		$query=$con->fcEjecutarConsulta($sql.$sqlb,$cn)or die("Error de MySQL: ".mysql_error());		
																		
																		//******************************************************
            
                											while($row=$con->fcFetch_array($query)){
														
														?>
                          								<div class="fila_eventos">
                                                                    <div class="four columns" >
                                                                        <a href="evento_detalle.php?evento_id=<?= $row["evento_id"];?>"><img src="mantenimiento/imgServer/thumb/<?= $row["evento_imgP"];?>"></a>
                                                                    </div>
                                                                    <div class="eight columns" >
                                                                        <a style="text-decoration:none;" href="evento_detalle.php?evento_id=<?= $row["evento_id"];?>"><h5><?= strtoupper($row["evento_nombre"]);?></h5></a>
                                                                        <p class="texto_maseventos">
																				<?= formato_fecha($row["evento_fecha"])." / ";?>
                                                                                <? $sql_ciu="select* from ciudad where ciudad_id=".$row["ciudad_id"];
																				   $query_ciu=$con->fcEjecutarConsulta($sql_ciu,$cn)or die("Error de MySQL: ".mysql_error());
																				   $row_ciu=$con->fcFetch_array($query_ciu);
																				   echo "<span class='rojo'>".$row_ciu["ciudad_nombre"]."</span>";																				
																				
																				?>
                                                                                <br>
																				<?= $row["evento_direccion"]?><br>S/.<?=$row["evento_precio"]?>
                                                                        </p>
                                                                    </div>
                                                        <div style="clear:both;"></div>
                                                        </div>
                                                        <?  														    
															}
														?>    
                                                        <div>
                                                        	<div class="four columns">
                                                            		<? 
																	$rs=$con->fcEjecutarConsulta($sql,$cn);
																	$nfilas=$con->fcNumeroRegistros($rs);
																	$ntotpag=floor(($nfilas/$regxpag));
																		if(($nfilas%$regxpag)>0){$ntotpag++;}
																		/*if($ntotpag >1){
																	?>                          
																			 <strong>Página</strong>:
																			 <? echo ($pagina +1)." de ".$ntotpag;                          
																		}   */ ?>
                                                            </div>
                                                            <div class="eight columns" style="text-align:right;">
                                                            		<?
																					for($i=0;$i<$ntotpag;$i++){
																					if($i==$pagina){
																						echo "[".($i+1)."]";
																					}
																					else{ ?>
																		  <a href='<? echo "index.php?pagina=$i";?>' target="_self"><? echo "[".($i+1)."]";?></a>
																					<? 
																					}
																				}
																	?>                                                            
                                                            </div>                                                        
                                                        </div>                     								
                                                        					
                                
                          </li>
                          <li id="simple2Tab">
                          								<?
																		//****************** CONSULTA , CON PAGINACION INTERNACIONAL
																		$regxpag=10;
																		
																		if(!isset($_REQUEST['pagina'])){
																			$pagina=0;
																		}else{
																			$pagina=$_REQUEST['pagina']; 
																		}
																		$regini=$pagina * $regxpag; 
																	    $sql_i="select * from evento where evento_tipo=2 and evento_estado=1 order by evento_fecha asc";
																		$sqlb=" limit $regini,$regxpag";
																		$query_i=$con->fcEjecutarConsulta($sql_i.$sqlb,$cn)or die("Error de MySQL: ".mysql_error());		
																		
																		//******************************************************
            
                											while($row_i=$con->fcFetch_array($query_i)){
														
														?>
                          								<div class="fila_eventos">
                                                                    <div class="four columns" >
                                                                        <a href="evento_detalle.php?evento_id=<?= $row_i["evento_id"];?>"><img src="mantenimiento/imgServer/thumb/<?= $row_i["evento_imgP"];?>"></a>
                                                                    </div>
                                                                    <div class="eight columns" >
                                                                        <h5><?= strtoupper($row_i["evento_nombre"]);?></h5>
                                                                        <p class="texto_maseventos">
																				<?= formato_fecha($row_i["evento_fecha"]);?> 
                                                                                <? $sql_ciu="select* from ciudad where ciudad_id=".$row_i["ciudad_id"];
																				   $query_ciu=$con->fcEjecutarConsulta($sql_ciu,$cn)or die("Error de MySQL: ".mysql_error());
																				   $row_ciu=$con->fcFetch_array($query_ciu);
																				   //echo "<span class='rojo'>".$row_ciu["ciudad_nombre"]."</span>";																				
																				
																				?>
                                                                                <br><?= $row_i["evento_direccion"]?><br>S/.<?=$row_i["evento_precio"]?></p>
                                                                    </div>
                                                        <div style="clear:both;"></div>
                                                        </div>
                                                        <? 
															}
														?>         
                                                        <div>
                                                        	<div class="four columns">
                                                            		<? 
																	$rs_i=$con->fcEjecutarConsulta($sql_i,$cn);
																	$nfilas=$con->fcNumeroRegistros($rs_i);
																	$ntotpag=floor(($nfilas/$regxpag));
																		if(($nfilas%$regxpag)>0){$ntotpag++;}
																		/*if($ntotpag >1){
																	?>                          
																			 <strong>Página</strong>:
																			 <? echo ($pagina +1)." de ".$ntotpag;                          
																		}   */ ?>
                                                            </div>
                                                            <div class="eight columns" style="text-align:right;">
                                                            		<?
																					for($i=0;$i<$ntotpag;$i++){
																					if($i==$pagina){
																						echo "[".($i+1)."]";
																					}
																					else{ ?>
																		  <a href='<? echo "index.php?pagina=$i"."#simple2";?>' target="_self"><? echo "[".($i+1)."]";?></a>
																					<? 
																					}
																				}
																	?>                                                            
                                                            </div>                                                        
                                                        </div>
                                                                                                 
                          
                          </li>
                        <br>
                        </ul>
                        
            </div>
            
            <!--FIN LISTA_EVENTOS-->
            <div class="three columns">
            	<div class="publicidad2_item1">MUY PRONTO PODRÁS ADQUIRIR TUS ENTRADAS PAGANDO ONLINE</div>
                    <div class="publicidad2_item2">
           		    	<img src="images/item1.jpg">
                    	<img src="images/item2.jpg">
                    	<img src="images/item3.jpg">
                    	<img src="images/item4.jpg">
                    	<img src="images/item5.jpg">
                        <img src="images/item6.jpg">
                        <img src="images/item7.jpg">
	                </div>
              <br>        
            </div>
         
         </div>
   
    </div>
    <!--FIN ROW-->
    
    <div id="metodosPago" class="row">
    	<div class="three columns">
        	<h5 class="texto_negro"> ¿CÓMO PAGAR LOS EVENTOS EN ADTICKED?</h5>
        </div>
        <div class="three columns">
        	<img src="images/met1.png" >
            <h5 class="texto_negro">PAGO VÍA DEPÓSITO EN CUENTA BANCARIA</h5>
        </div>
        <div class="three columns">
        	<img src="images/met2.png" >
            <h5 class="texto_negro">PAGO VÍA INTERNET POR MEDIO DE TARJETA DE CRÉDITO</h5>
        </div>
        <div class="three columns">
        	<img src="images/met3.png">
            <h5 class="texto_negro">PAGO DE SERVICIO LIVE STREAMING DE EVENTOS</h5>  
        </div>    
    </div>
    <!--fin metodos de pago-->
    
    
     <footer> 
	     <div class="row">       	
                <div id="logo_oscuro" class="four columns"> <a href="index.php"><img src="images/logooff.png"></a>            </div>               
                <div id="listado" class="three columns offset-by-five">
                    <ul>	
                        <li><a href="que-es-adticket.php">Quienes Somos </a></li>
                        <!--<li><a href="#">Como comprar</a></li>
                        <li><a href="#">Promociona tu evento</a></li>-->
                        <li><a href="terminos-y-condiciones.php">Términos y condiciones </a></li>
                        <li><a href="#">Privacidad y Seguridad</a></li>
                        <li><a href="contacto.php">Contáctanos</a></li>
                    
                    </ul>
                </div>     
    	</div>        
    </footer>
    <!--fin pie-->



  
</body>
</html>
