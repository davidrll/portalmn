<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller {
	//HOLA JOSEP
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
		//Cargo los Videos de Youtube
		$data['videoshome'] = $this->model_portal->getVideosHome();

		$data['importante1'] = $this->model_portal->getEspecRecom();
		$data['importante2'] = $this->model_portal->getNotRecom();
		$data['impresa'] = $this->model_portal->getImpresa();
		$data['maximpresa'] = $this->model_portal->maxImpresa();
		
		#Cargo Noticias del Home
		$data['noticiaBloqueUno'] = $this->model_portal->getBloqueNoticias(1);
		$data['noticiaBloqueDos'] = $this->model_portal->getBloqueNoticias(2);
		$data['noticiaBloqueTres'] = $this->model_portal->getBloqueNoticias(3);
		$data['noticiaBloqueCuatro'] = $this->model_portal->getBloqueNoticias(4);
		#Cargo a los Especialistas
		$data['especialistas'] = $this->model_portal->getEspecialistas();
		//Cargo los datos para la Galería
		$data['galeriapub1'] = $this->model_portal->getGaleriaHome(1);
		$data['galeriapub2'] = $this->model_portal->getGaleriaHome(2);
		$data['galeriapub3'] = $this->model_portal->getGaleriaHome(3);
		$this->load->view('inicio', $data);
	}

	public function salir(){
		redirect('');
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

	public function suscripcion(){
		//Cargo los Videos de Youtube
		$data['videoshome'] = $this->model_portal->getVideosHome();

		$data['importante1'] = $this->model_portal->getEspecRecom();
		$data['importante2'] = $this->model_portal->getNotRecom();
		$data['impresa'] = $this->model_portal->getImpresa();
		$data['maximpresa'] = $this->model_portal->maxImpresa();
		$data['especialistas'] = $this->model_portal->getEspecialistas();
		$this->load->view('suscripcion', $data);
	}

	public function enviar()
    {
        $this->load->library('email');
        $nombre = $this->security->xss_clean($this->input->post('nombre'));
        $correo = $this->security->xss_clean($this->input->post('correo'));
        $telefono = $this->security->xss_clean($this->input->post('telefono'));
        $fact = $this->security->xss_clean($this->input->post('fact'));
        $pack = $this->security->xss_clean($this->input->post('pack'));
        $revista = $this->security->xss_clean($this->input->post('pedido'));
        
        $direccion = $this->security->xss_clean($this->input->post('direccion'));
        $comentarios = $this->security->xss_clean($this->input->post('comentarios'));
        $full = $this->security->xss_clean($this->input->post('full'));

        if($full == 0){
        	if($fact == 0){
        		$msg = "<h5><strong>Nombres: </strong>". $nombre."</br></h5> ";
		        $msg .= "<h5><strong>Correo: </strong>". $correo."</br></h5> ";
		        $msg .= "<h5><strong>Telefono:</strong> ". $telefono."</br></h5> ";
		        $msg .= "<h5><strong>Direccion: </strong>". $direccion."</br></h5> ";
		        $msg .= "<h5><strong>Comentario: </strong>". $comentarios."</br></h5> ";
		        $msg .= "<h5><strong>Facturación: </strong>". "No"."</br></h5> ";
		        $msg .= "<h5><strong>Pack: </strong>". $pack ."</br></h5> ";
		        //$archivo = "../assets/img/face.png";
		        //$this->email->from($correo, $nombre);
		        $config = array (
                  'mailtype' => 'html',
                  'charset'  => 'utf-8',
                  'priority' => '1'
                   );
        		$this->email->initialize($config);
		        $this->email->from($correo,$nombre);
		        $this->email->to('contacto@mercadonegro.pe');
		        $this->email->cc('karina.torres@mercadonegro.pe');
		        $this->email->subject('SUSCRIPCIÓN FULL PACK REVISTA');
		        $this->email->message($msg);
		        //$this->email->attach("$archivo");
		        if($this->email->send()){
		        	echo "1";
		        }else{
		        	echo "0";
		        }
        	}
        	else{
        		$razon = $this->security->xss_clean($this->input->post('razon'));
     	   		$ruc = $this->security->xss_clean($this->input->post('ruc'));
       			$deposito = $this->security->xss_clean($this->input->post('deposito'));
        		$msg = '<h5><strong>Nombres: </strong>'. $nombre.'</br></h5> ';
		        $msg .= '<h5><strong>Correo: </strong>'. $correo.'</br></h5> ';
		        $msg .= '<h5><strong>Teléfono: </strong>'. $telefono.'</br></h5> ';
		        $msg .= '<h5><strong>Razón Social: </strong>'. $razon.'</br></h5> ';
		        $msg .= '<h5><strong>RUC: </strong>'. $ruc.'</br></h5> ';
		        $msg .= '<h5><strong>Número de Depósito: </strong>'. $deposito.'</br></h5> ';
		        $msg .= '<h5><strong>Direccion: </strong>'. $direccion.'</br></h5> ';
		        $msg .= '<h5><strong>Comentario: </strong>'. $comentarios.'</br></h5> ';
		        $msg .= '<h5><strong>Facturación: </strong>'. 'Si'.'</br></h5> ';
		        $msg .= '<h5><strong>Revista: </strong>'. $revista.'</br></h5> ';
		        
		        $archivo = "../assets/i|mg/face.png";
		        $config = array (
                  'mailtype' => 'html',
                  'charset'  => 'utf-8',
                  'priority' => '1'
                   );
        		$this->email->initialize($config);
		        $this->email->from($correo,$nombre);
		        $this->email->to('contacto@mercadonegro.pe');
		        $this->email->cc('karina.torres@mercadonegro.pe');
		        $this->email->subject('SUSCRIPCIÓN: FULL PACK EMPRESA');
		        $this->email->message($msg);
		        //$this->email->attach("$archivo");
		        if($this->email->send()){
		        	echo "1";
		        }else{
		        	echo "0";
		        }
		        	}
        	
        }
        else{
        	if($fact == 0){
        		$msg = '<h5><strong>Nombres: </strong>'. $nombre.'</br></h5> ';
		        $msg .= '<h5><strong>Correo: </strong>'. $correo.'</br></h5> ';
		        $msg .= '<h5><strong>Telefono: </strong>'. $telefono.'</br></h5> ';
		        $msg .= '<h5><strong>Direccion: </strong>'. $direccion.'</br></h5> ';
		        $msg .= '<h5><strong>Comentario: </strong>'. $comentarios.'</br></h5> ';
		        $msg .= '<h5><strong>Facturación: </strong>'. 'No'.'</br></h5> ';
		        $msg .= '<h5><strong>Revista: </strong>'. $revista.'</br></h5> ';
		        //$archivo = "../assets/img/face.png";
		        //$this->email->from($correo, $nombre);
		        $this->email->from($correo,$nombre);
		        $config = array (
                  'mailtype' => 'html',
                  'charset'  => 'utf-8',
                  'priority' => '1'
                   );
        		$this->email->initialize($config);
		        $this->email->from($correo,$nombre);
		        $this->email->to('contacto@mercadonegro.pe');
		        $this->email->cc('karina.torres@mercadonegro.pe');
		        $this->email->subject('FULL PACK EMPRESA');
		        $this->email->message($msg);
		        //$this->email->attach("$archivo");
		        if($this->email->send()){
		        	echo "1";
		        }else{
		        	echo "0";
		        }
        	}
        	else{
        		$razon = $this->security->xss_clean($this->input->post('razon'));
        		$ruc = $this->security->xss_clean($this->input->post('ruc'));
        		$deposito = $this->security->xss_clean($this->input->post('deposito'));
        		$msg = '<h5><strong>Nombres: </strong>'. $nombre.'</br></h5> ';
		        $msg .= '<h5><strong>Correo: </strong>'. $correo.'</br></h5> ';
		        $msg .= '<h5><strong>Teléfono: </strong>'. $telefono.'</br></h5> ';
		        $msg .= '<h5><strong>Razón Social: </strong>'. $razon.'</br></h5> ';
		        $msg .= '<h5><strong>RUC: </strong>'. $ruc.'</br></h5> ';
		        $msg .= '<h5><strong>Número de Depósito:</strong> '. $deposito.'</br></h5> ';
		        $msg .= '<h5><strong>Direccion: </strong>'. $direccion.'</br></h5> ';
		        $msg .= '<h5><strong>Comentario: </strong>'. $comentarios.'</br></h5> ';
		        $msg .= '<h5><strong>Facturación: </strong>'. 'Si'.'</br></h5> ';
		        $msg .= '<h5><strong>Revista: </strong>'. $revista.'</br></h5> ';
		        //$archivo = "../assets/i|mg/face.png";
		        //$this->email->from($correo, $nombre);
		        $config = array (
                  'mailtype' => 'html',
                  'charset'  => 'utf-8',
                  'priority' => '1'
                   );
        		$this->email->initialize($config);
		        $this->email->from($correo,$nombre);
		        $this->email->to('contacto@mercadonegro.pe');
		        $this->email->cc('karina.torres@mercadonegro.pe');
		        $this->email->subject('FULL PACK EMPRESA');
		        $this->email->message($msg);
		        //$this->email->attach("$archivo");
		        if($this->email->send()){
		        	echo "1";
		        }else{
		        	echo "0";
		        }
        	}
        }
      
    }


	public function registrarsuscrip(){
		$this->form_validation->set_rules('mail_sus', 'Email', 'trim|required|min_length[1]|max_length[50]|xss_clean');
		//Mensajes
		$this->form_validation->set_message('required','<b>ERROR:</b> Falta completar el campo: %s.');
		$this->form_validation->set_message('min_length','<b>ERROR:</b> El campo %s debe tener 1 dígito como mínimo.');
		$this->form_validation->set_message('max_length','<b>ERROR:</b> El campo %s debe tener 20 dígitos como máximo.');
		//Delimitadores de ERROR:
		$this->form_validation->set_error_delimiters('<span>', '</span><br>');

		if($this->form_validation->run() == FALSE)
		{
			echo validation_errors();
		}
		else
		{	
	        $result = $this->model_portal->saveSuscrip();
	        // Verificamos que existan resultados
	        if(!$result){
	            //Sí no se encotnraron datos.
	            echo '<span style="color:red"><b>ERROR:</b> Este grupo de usuarios ya se encuentra registrado.</span>';
	        }else{
	        	//Registramos la sesion del usuario
	        	echo '1';
	        }
		}
	}
	public function enviarmail()
    {
        $this->load->library('email');
        $nombre_cont = $this->security->xss_clean($this->input->post('nombre_cont'));
        $mail_cont = $this->security->xss_clean($this->input->post('mail_cont'));
        $mensaje = $this->security->xss_clean($this->input->post('mensaje'));
        $msg = '<h5><strong>Nombres: </strong>'. $nombre_cont.'</br></h5> ';
        $msg .= '<h5><strong>Correo: </strong>'. $mail_cont.'</br></h5> ';
        $msg .= '<h5><strong>Mensaje: </strong>'. $mensaje.'</br></h5> ';
         //$archivo = "../assets/img/face.png";
        //$this->email->from($mail_cont, $nombre_cont);
        $config = array (
                  'mailtype' => 'html',
                  'charset'  => 'utf-8',
                  'priority' => '1'
                   );
        		$this->email->initialize($config);
        $this->email->from($mail_cont,$nombre_cont);
        //$this->email->to('contacto@mercadonegro.pe');
        $this->email->to('contacto@mercadonegro.pe');
		$this->email->cc('karina.torres@mercadonegro.pe');
        $this->email->subject('CONTACTO - Mercado Negro');
        $this->email->message($msg);
         //$this->email->attach("$archivo");
        if($this->email->send()){
        	echo "1";
        }else{
        	echo "0";
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */