<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Galeria extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct(){
		parent::__construct();
		//Cargo el Modelo
		$this->load->model('model_portal');	
	}

	public function index()
	{
		$item = $this->security->xss_clean($this->uri->segment(2));
		$id = $this->security->xss_clean($this->uri->segment(3));
		if(empty($item) || empty($id)){
			redirect('');
		}
		#Cargo a los Especialistas
		$data['importante1'] = $this->model_portal->getEspecRecom();
		$data['importante2'] = $this->model_portal->getNotRecom();
		$data['impresa'] = $this->model_portal->getImpresa();
		$data['maximpresa'] = $this->model_portal->maxImpresa();
		$data['especialistas'] = $this->model_portal->getEspecialistas();
		//Cargo los Videos de Youtube
		$data['detalle'] = $this->model_portal->getGaleria($item, $id);
		$data['galeriapub1'] = $this->model_portal->getGaleriaHomeGal();
		
		$this->load->view('galeria', $data);
	}

	public function galerias()
	{
		$data['importante1'] = $this->model_portal->getEspecRecom();
		$data['importante2'] = $this->model_portal->getNotRecom();
		$data['impresa'] = $this->model_portal->getImpresa();
		$data['maximpresa'] = $this->model_portal->maxImpresa();
		//Cargo los Videos de Youtube
		$data['detalles'] = $this->model_portal->getGalerias();
		#Cargo a los Especialistas
		$data['especialistas'] = $this->model_portal->getEspecialistas();
		$this->load->view('galerias', $data);
	}

	public static function urlamigable($url) {
		// Tranformamos todo a minusculas
		$url = strtolower($url);
		//Rememplazamos caracteres especiales latinos
		$find = array('á', 'é', 'í', 'ó', 'ú', 'ñ');
		$repl = array('a', 'e', 'i', 'o', 'u', 'n');
		$url = str_replace ($find, $repl, $url);
		// Añadimos los guiones
		$find = array(' ', '&', '\r\n', '\n', '+');
		$url = str_replace ($find, '-', $url);
		// Eliminamos y Reemplazamos demás caracteres especiales
		$find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');
		$repl = array('', '-', '');
		$url = preg_replace ($find, $repl, $url);
		return $url;
	}

	public static function utf8($string) {
		$string = str_replace(array('á','à','â','ã','ª','ä'),'a',$string);
		$string = str_replace(array('Á','À','Â','Ã','Ä'),'a',$string);
		$string = str_replace(array('Í','Ì','Î','Ï'),'i',$string);
		$string = str_replace(array('í','ì','î','ï'),'i',$string);
		$string = str_replace(array('é','è','ê','ë'),'e',$string);
		$string = str_replace(array('É','È','Ê','Ë'),'e',$string);
		$string = str_replace(array('ó','ò','ô','õ','ö','º'),'o',$string);
		$string = str_replace(array('Ó','Ò','Ô','Õ','Ö'),'o',$string);
		$string = str_replace(array('ú','ù','û','ü'),'u',$string);
		$string = str_replace(array('Ú','Ù','Û','Ü'),'u',$string);
		$string = str_replace('ç','c',$string);
		$string = str_replace('Ç','c',$string);
		$string = str_replace('ñ','n',$string);
		$string = str_replace('Ñ','N',$string);
		$string = str_replace('Ý','y',$string);
		$string = str_replace('ý','y',$string);
		return $string;
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/noticia.php */