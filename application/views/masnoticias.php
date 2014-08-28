<?php
	if(is_array($noticias)){
		foreach ($noticias as $noticia) {
			if(empty($noticia->subida)){ $noticia->subida = ''; }else{ $noticia->subida = $noticia->subida.' - '; }
			$urlBloque1 = $noticia->titulo;
			$urlBloque1 = Noticia::urlamigable($urlBloque1);
?>
<div id="mininoticia" class="message_box" data-id="<?php echo $noticia->codigo;?>"> 
	<img src="<?php echo $noticia->portada;?>" class="fonoticia" />
	<!-- COMPARTIR BEGIN -->
	<a class="a2a_dd" href="http://www.addtoany.com/share_save?linkurl=<?php echo base_url().'noticia/'.$noticia->codigo.'/'.$urlBloque1;?>&amp;linkname="><img src="<?php echo base_url(); ?>assets/img/share.png" width="20" class="shared" alt="compartir"></a>
	<script type="text/javascript">
		var a2a_config = a2a_config || {};
		a2a_config.linkurl = "<?php echo base_url().'noticia/'.$noticia->codigo.'/'.$urlBloque1;?>";
		a2a_config.onclick = 1;
	</script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/share.js'?>"></script>
	<!-- COMPARTIR END -->
	<div class="feregistro"><span class="catpubli">PUBLICIDAD</span> <?php echo $noticia->subida; ?><span class="fechanoti"><?php echo $noticia->fecha; ?></span></div>
	<h1><a href="<?php echo base_url().'noticia/'.$noticia->codigo.'/'.$urlBloque1;?>"><?php echo $noticia->titulo; ?></a></h1>
	<span class="exnoticia"><?php echo $noticia->extracto; ?>...</span>
</div>
<?php
		} 
	} 
?>