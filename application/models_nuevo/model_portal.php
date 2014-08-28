<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_portal extends CI_Model {

    public function __construct(){
        parent::__construct();
    }
#Trae Video de Recomendaciones
    public function getEspecRecom(){
        $query = $this->db->query("SELECT especialistas.codigo,especialistas.nombres,especialistas.imagen AS imag_colum,notas_especialista.titulo AS frase FROM especialistas INNER JOIN notas_especialista ON especialistas.codigo = notas_especialista.codigo WHERE especialistas.flg_recom = 1 AND notas_especialista.estado = 1");
        if($query->num_rows()>0)
        {
            return $query->result();
        }
    }
    public function getNotRecom(){
        $query = $this->db->query("SELECT * FROM noticias WHERE flg_recomen=1 AND estado=1");
        if($query->num_rows()>0)
        {
            return $query->result();
        }
    }
	
	#Trae Video de MercadoNegroTV
    public function getImpresa(){
        $query = $this->db->query("SELECT * FROM impresa ORDER BY codigo DESC LIMIT 8");
        if($query->num_rows()>0)
        {
            return $query->result();
        }
    }

    #Trae Video de MercadoNegroTV
    public function getVideo($idvideo){
        $query = $this->db->query("SELECT portal_videos.pv_nombre AS titulo,portal_videos.pv_codigo AS codyoutube,portal_videos.pv_fecsub AS fecharegistro FROM portal_videos WHERE portal_videos.pv_id <> 46 AND portal_videos.pv_tipo=1 AND portal_videos.pv_id = ".$idvideo);
        if($query->num_rows()>0)
        {
            return $query->result();
        }
    }
	public function maxImpresa(){
        $query = $this->db->query("SELECT MAX(codigo) AS cod FROM impresa");
        if($query->num_rows()>0)
        {
            return $query->result();
        }
    }

    #Trae Noticia de Mercado Negro
    public function getNoticia($idnoti){
        $contenido = "REPLACE(noticias.contenido,'&nbsp;','') AS contenido";

        $query = $this->db->query("SELECT UPPER(noticias.subida) AS subida,noticias.tags,SUBSTR(REPLACE(fnStripTags(noticias.contenido),'&nbsp;',''),1,190) AS extracto,noticias.titulo,noticias.sumilla_g,".$contenido.",DATE(noticias.fecha) AS fecha FROM noticias WHERE noticias.estado = 1 AND noticias.codigo = ".$idnoti);
        if($query->num_rows()>0)
        {
            return $query->result();
        }
    }

    #Trae Items de la Noticia de Mercado Negro
    public function getNoticiaItem($idnoti){

        $query = $this->db->query("SELECT noticias.tags FROM noticias WHERE noticias.estado = 1 AND noticias.codigo = ".$idnoti);
        if($query->num_rows()>0)
        {
            return $query->result();
        }
    }

    #Trae Items de la Noticia de Mercado Negro
    public function getNoticiaRelac($it){
        
        $filtro="";
        //$i=0;
        if(empty($it)){
            $query = $this->db->query("SELECT noticias.codigo,noticias.subida,noticias.titulo,noticias.sumilla_g AS portada,SUBSTR(REPLACE(fnStripTags(noticias.contenido),'&nbsp;',''),1,190) AS extracto,DATE(noticias.fecha) AS fecha FROM noticias WHERE noticias.estado = 1 AND noticias.fecha between DATE('2014-01-01') and DATE('2014-12-31') ORDER BY fecha DESC LIMIT 5");
            if($query->num_rows()>0)
            {
                return $query->result();
            }
        }
        else{
            foreach ($it as $key => $value) {
                
                $filtro.=" AND noticias.tags LIKE '%".$value."%' ";
                //$i++;
            }
            $query = $this->db->query("SELECT noticias.codigo,noticias.subida,noticias.titulo,noticias.sumilla_g AS portada,SUBSTR(REPLACE(fnStripTags(noticias.contenido),'&nbsp;',''),1,190) AS extracto,DATE(noticias.fecha) AS fecha FROM noticias WHERE noticias.estado = 1 AND noticias.fecha between DATE('2014-01-01') and DATE('2014-12-31')".$filtro." ORDER BY fecha DESC LIMIT 5");
            if($query->num_rows()>0)
            {
                return $query->result();
            }
        }
        
        
    }

    #Traemos todas las Noticias para la Lista
    public function getNoticias(){
        $query = $this->db->query("SELECT noticias.codigo,noticias.subida,noticias.titulo,noticias.sumilla_g AS portada,SUBSTR(REPLACE(fnStripTags(noticias.contenido),'&nbsp;',''),1,190) AS extracto,DATE(noticias.fecha) AS fecha FROM noticias WHERE noticias.estado = 1 ORDER BY noticias.fecha DESC LIMIT 40");
        if($query->num_rows()>0)
        {
            return $query->result();
        }
    }

    #Traemos MÁS Noticias para la Lista
    public function getMasNoticias($idnoti){
        $query = $this->db->query("SELECT noticias.codigo,noticias.subida,noticias.titulo,noticias.sumilla_g AS portada,SUBSTR(REPLACE(fnStripTags(noticias.contenido),'&nbsp;',''),1,190) AS extracto,DATE(noticias.fecha) AS fecha FROM noticias WHERE noticias.estado = 1 AND noticias.codigo < ".$idnoti." ORDER BY noticias.fecha DESC LIMIT 10");
        if($query->num_rows()>0)
        {
            return $query->result();
        }
    }

    #Trae Noticia de Mercado Negro con ERRORES
    public function getNoticiaError($idnoti){
        $query = $this->db->query("SELECT noticias.subida,noticias.tags,noticias.titulo,noticias.sumilla_g,REPLACE(fnStripTags(noticias.contenido),'&nbsp;','') AS contenido,DATE(noticias.fecha) AS fecha FROM noticias WHERE noticias.estado = 1 AND noticias.codigo = ".$idnoti);
        if($query->num_rows()>0)
        {
            return $query->result();
        }
    }

	#Trae el valor del contrador actual
    public function contVisita($idnoti){
        $query = $this->db->query("SELECT noticias.nro_visitas FROM noticias WHERE noticias.codigo = ".$idnoti);
        if($query->num_rows()>0)
        {
            return $query->result();
        }
    }
    #Actualizar el contador
    public function AumentarVisita($idnoti,$nro){
        $n=$nro+1;
        $actualizar=array(
            'nro_visitas' => $n
        );
        $this->db->where('codigo',$idnoti);
        $this->db->update('noticias', $actualizar);
    }
    #Bloque de Videos MercadoNegroTV
    public function getVideosHome(){
        $query = $this->db->query("SELECT portal_videos.pv_id AS idnoti,UPPER(SUBSTRING(portal_videos.pv_nombre,1,80)) AS titulo,CONCAT('http://img.youtube.com/vi/',portal_videos.pv_codigo,'/0.jpg') AS fotovideo,portal_videos.pv_codigo AS codyoutube,portal_videos.pv_fecsub AS fecharegistro FROM portal_videos WHERE portal_videos.pv_id <> 46 AND portal_videos.pv_tipo=1 ORDER BY fecharegistro DESC LIMIT 4");
        if($query->num_rows()>0)
        {
            return $query->result();
        }
    }

    #Bloque de Más Videos MercadoNegroTV
    public function getMasVideos(){
        $query = $this->db->query("SELECT portal_videos.pv_id AS idnoti,UPPER(SUBSTRING(portal_videos.pv_nombre,1,80)) AS titulo,CONCAT('http://img.youtube.com/vi/',portal_videos.pv_codigo,'/0.jpg') AS fotovideo,portal_videos.pv_codigo AS codyoutube,portal_videos.pv_fecsub AS fecharegistro FROM portal_videos WHERE portal_videos.pv_id <> 46 AND portal_videos.pv_tipo=1 ORDER BY fecharegistro DESC LIMIT 6");
        if($query->num_rows()>0)
        {
            return $query->result();
        }
    }

    #Primer Bloque de Noticias
    public function getBloqueNoticias($bloque = 1){
        if($bloque == 1) {
            $limit = 'LIMIT 6';
        }elseif ($bloque == 2) {
            $limit = 'LIMIT 6, 11';
        }elseif ($bloque == 3) {
            $limit = 'LIMIT 17, 5';
        }elseif ($bloque == 4) {
            $limit = 'LIMIT 22, 3';
        }

        $query = $this->db->query("SELECT noticias.codigo,noticias.subida,noticias.titulo,noticias.sumilla_g AS portada,SUBSTR(REPLACE(fnStripTags(noticias.contenido),'&nbsp;',''),1,190) AS extracto,DATE(noticias.fecha) AS fecha FROM noticias WHERE noticias.estado = 1 ORDER BY noticias.fecha DESC ".$limit);
        if($query->num_rows()>0)
        {
            return $query->result();
        }
    }

    #MiniBloque de Especialistas
    public function getEspecialistas(){
        $query = $this->db->query("SELECT especialistas.codigo,especialistas.nombres,especialistas.cargo,especialistas.imagen AS fotoesp,notas_especialista.titulo AS titulocolum,TRIM(fnStripTags(notas_especialista.contenido)) AS desc_colum FROM especialistas INNER JOIN notas_especialista ON especialistas.codigo = notas_especialista.codigo WHERE especialistas.estado = 1 AND YEAR (notas_especialista.fe_reg) = YEAR (CURDATE()) AND notas_especialista.estado = 1 LIMIT 6");
        if($query->num_rows()>0)
        {
            return $query->result();
        }
    }

    #Listar todos los columnistas
    public function getTodosColumnistas(){
        $query = $this->db->query("SELECT especialistas.codigo,especialistas.nombres,especialistas.cargo,SUBSTR(fnStripTags (especialistas.biografia),1,250) AS bio,especialistas.imagen AS imag_colum,notas_especialista.titulo,TRIM(fnStripTags(notas_especialista.contenido)) AS desc_colum FROM especialistas INNER JOIN notas_especialista ON especialistas.codigo = notas_especialista.codigo WHERE especialistas.estado = 1 AND YEAR (notas_especialista.fe_reg) = YEAR (CURDATE()) AND notas_especialista.estado = 1 ORDER BY notas_especialista.fe_reg DESC");
        if($query->num_rows()>0)
        {
            return $query->result();
        }
    }

    #Trae datos del Columnista
    public function getColumnista($idesp){
        if($idesp >= 215){
            $contenido = "columnista.bio AS bio";
        }else{
            $contenido = "fnStripTags(columnista.bio) AS bio";
        }

        $query = $this->db->query("SELECT columnista.nombres,columnista.cargo,".$contenido.",columnista.frase,columnista.desc_colum,columnista.imag_colum,DATE(columnista.fecha_colum) AS fecha_colum FROM columnista WHERE columnista.estado_colum = 1 AND YEAR(columnista.fecha_colum) = YEAR(CURDATE()) AND columnista.codigo = ".$idesp);
        if($query->num_rows()>0)
        {
            return $query->result();
        }
    }

    #Llenamos la Galería del Home
    public function getGaleriaHome($parte){
        if($parte == 1){
            $sql = "(SELECT btl.codigo,btl.titulo,btl.sumilla_g AS imagen,btl.fecha,btl.items FROM btl WHERE btl.estado = 1 ORDER BY btl.fecha DESC LIMIT 4) UNION (SELECT grafica.codigo,grafica.titulo,grafica.sumilla_g,grafica.fecha,grafica.items FROM grafica WHERE grafica.estado = 1 ORDER BY grafica.fecha DESC LIMIT 4)";
        }elseif($parte == 2){
            $sql = "(SELECT interactivo.codigo,interactivo.titulo,interactivo.sumilla_g AS imagen,interactivo.fecha,interactivo.items FROM interactivo WHERE interactivo.estado = 1 ORDER BY fecha DESC LIMIT 4) UNION (SELECT radio.codigo,radio.titulo,radio.imagen,radio.fecha,radio.items FROM radio WHERE radio.estado = 1 ORDER BY fecha DESC LIMIT 4)";
        }elseif($parte == 3){
            $sql = "(SELECT comerciales_tv.codigo,comerciales_tv.titulo,comerciales_tv.imagen,comerciales_tv.fecha,comerciales_tv.items FROM comerciales_tv WHERE comerciales_tv.estado = 1 ORDER BY fecha DESC LIMIT 4)";
        }
        $query = $this->db->query($sql);
        if($query->num_rows()>0)
        {
            return $query->result();
        }
    }
    public function getGaleriaHomeGal(){
        
        $sql = "(SELECT btl.codigo,btl.titulo,btl.sumilla_g AS imagen,btl.fecha,btl.items FROM btl WHERE btl.estado = 1 ORDER BY fecha DESC LIMIT 1) UNION (SELECT grafica.codigo,grafica.titulo,grafica.sumilla_g,grafica.fecha,grafica.items FROM grafica WHERE grafica.estado = 1 ORDER BY fecha DESC LIMIT 1) UNION (SELECT radio.codigo,radio.titulo,radio.imagen,radio.fecha,radio.items FROM radio WHERE radio.estado = 1 ORDER BY fecha DESC LIMIT 1) UNION (SELECT radio.codigo,radio.titulo,radio.imagen,radio.fecha,radio.items FROM radio WHERE radio.estado = 1 ORDER BY fecha DESC LIMIT 1)";
        $query = $this->db->query($sql);
        if($query->num_rows()>0)
        {
            return $query->result();
        }
    }

    #Llenamos las galeriasbtl.fecha,
    public function getGalerias(){
        $sql = "(SELECT btl.codigo,btl.titulo,btl.sumilla_g AS imagen,fnStripTags(btl.contenido) AS contenido,btl.fecha,btl.items FROM btl WHERE btl.estado = 1 ORDER BY btl.fecha DESC LIMIT 4) UNION (SELECT grafica.codigo,grafica.titulo,grafica.sumilla_g,fnStripTags(grafica.contenido) AS contenido,grafica.fecha,grafica.items FROM grafica WHERE grafica.estado = 1 ORDER BY grafica.fecha DESC LIMIT 4) UNION (SELECT interactivo.codigo,interactivo.titulo,interactivo.sumilla_g AS imagen,fnStripTags(interactivo.contenido) AS contenido,interactivo.fecha,interactivo.items FROM interactivo WHERE interactivo.estado = 1 ORDER BY fecha DESC LIMIT 4) UNION (SELECT radio.codigo,radio.titulo,radio.imagen,fnStripTags(radio.contenido) AS contenido,radio.fecha,radio.items FROM radio WHERE radio.estado = 1 ORDER BY fecha DESC LIMIT 4) UNION (SELECT comerciales_tv.codigo,comerciales_tv.titulo,comerciales_tv.imagen,fnStripTags(comerciales_tv.contenido) AS contenido,comerciales_tv.fecha,comerciales_tv.items FROM comerciales_tv WHERE comerciales_tv.estado = 1 ORDER BY fecha DESC LIMIT 4)";
        $query = $this->db->query($sql);
        if($query->num_rows()>0)
        {
            return $query->result();
        }
    }

    #Trae Noticia de Mercado Negro
    public function getGaleria($item, $id){
        $sql = '';
        if($item == 'btl'){
            $sql = "SELECT btl.codigo,btl.titulo,btl.sumilla_g,btl.fecha,btl.tags,btl.campania,btl.cliente,btl.sumilla_c,btl.ficha,btl.contenido AS contenido FROM btl WHERE btl.estado = 1 AND btl.codigo = ".$id;
        }elseif($item == 'gra'){
            $sql = "SELECT grafica.codigo,grafica.tags,grafica.campania,grafica.cliente,grafica.titulo,grafica.sumilla_g,grafica.ficha,grafica.contenido AS contenido,grafica.fecha FROM grafica WHERE grafica.estado = 1 AND grafica.codigo = ".$id;
        }elseif($item == 'med'){
            $sql = "SELECT interactivo.codigo,interactivo.titulo,interactivo.sumilla_g,interactivo.fecha,interactivo.tags,interactivo.campania,interactivo.cliente,interactivo.ficha,interactivo.contenido AS contenido FROM interactivo WHERE interactivo.estado = 1 AND interactivo.codigo = ".$id;
        }elseif($item == 'rad'){
            $sql = "SELECT radio.codigo,radio.titulo,radio.imagen,radio.fecha,radio.tags,radio.campania,radio.cliente,radio.ficha,radio.contenido AS contenido,radio.audio,radio.titulo_audio FROM radio WHERE radio.estado = 1 AND radio.codigo =  ".$id;
        }elseif($item == 'spo'){
            $sql = "SELECT comerciales_tv.codigo,comerciales_tv.titulo,comerciales_tv.imagen,comerciales_tv.fecha,comerciales_tv.tags,comerciales_tv.campania,comerciales_tv.cliente,comerciales_tv.ficha,comerciales_tv.contenido AS contenido,comerciales_tv.video,comerciales_tv.motivo FROM comerciales_tv WHERE comerciales_tv.estado = 1 AND comerciales_tv.codigo = ".$id;
        }

        $query = $this->db->query($sql);
        if($query->num_rows()>0)
        {
            return $query->result();
        }
    }

    #Guardamos a los suscriptores
    public function saveSuscrip(){
        $mail = $this->security->xss_clean($this->input->post('mail_sus'));
        $p = $this->security->xss_clean($this->input->post('checkboxValues'));
         //Registro de Periodo
        $registro = array(
            'mail'=> $mail,
            'requiere'=>$p,
            'fe_registro'=>date("Y-m-d"),
            'estado'=>1
        );
        $this->db->insert('suscriptores', $registro);
        return true;
    }

    public function getNoticiaB(){
    	$buscar=$this->security->xss_clean($this->input->post('buscar'));
        $fecha = date("Y-m-d", strtotime(str_replace('/', '-', $this->security->xss_clean($this->input->post('buscar')))));
    	 $query = $this->db->query("SELECT noticias.codigo,noticias.subida,noticias.titulo,noticias.sumilla_g AS portada,SUBSTR(REPLACE(fnStripTags(noticias.contenido),'&nbsp;',''),1,190) AS extracto,DATE(noticias.fecha) AS fecha FROM noticias WHERE noticias.estado = 1 AND (noticias.titulo LIKE '%".$buscar."%' OR DATE(noticias.fecha) = '".$fecha."') ORDER BY noticias.fecha DESC LIMIT 10");
        if($query->num_rows()>0)
        {
            return $query->result();
        }
    }

    public function getBtlB(){
    	$buscar=$this->security->xss_clean($this->input->post('buscar'));
        $fecha = date("Y-m-d", strtotime(str_replace('/', '-', $this->security->xss_clean($this->input->post('buscar')))));
    	 $query = $this->db->query("SELECT btl.codigo,btl.titulo,btl.sumilla_g,btl.fecha,btl.tags,btl.campania,btl.cliente,btl.sumilla_c,btl.ficha,SUBSTR(REPLACE(fnStripTags(btl.contenido),'&nbsp;',''),1,190) AS contenido FROM btl WHERE btl.estado = 1 AND (btl.titulo LIKE '%".$buscar."%' OR DATE(btl.fecha) ='".$fecha."') ");
        if($query->num_rows()>0)
        {
            return $query->result();
        }
    }

    public function getRadioB(){
    	$buscar=$this->security->xss_clean($this->input->post('buscar'));
        $fecha = date("Y-m-d", strtotime(str_replace('/', '-', $this->security->xss_clean($this->input->post('buscar')))));
    	 $query = $this->db->query("SELECT radio.codigo,radio.titulo,radio.imagen,radio.fecha,radio.tags,radio.campania,radio.cliente,radio.ficha,SUBSTR(REPLACE(fnStripTags(radio.contenido),'&nbsp;',''),1,190) AS contenido,radio.audio,radio.titulo_audio FROM radio WHERE radio.estado = 1 AND (radio.titulo LIKE '%".$buscar."%' OR DATE(radio.fecha) ='".$fecha."')");
        if($query->num_rows()>0)
        {
            return $query->result();
        }
    }

    public function getPortalVideoB(){
    	$buscar=$this->security->xss_clean($this->input->post('buscar'));
        $fecha = date("Y-m-d", strtotime(str_replace('/', '-', $this->security->xss_clean($this->input->post('buscar')))));
    	 $query = $this->db->query("SELECT portal_videos.pv_nombre AS titulo,portal_videos.pv_codigo AS codyoutube,portal_videos.pv_fecsub AS fecharegistro FROM portal_videos WHERE portal_videos.pv_id <> 46 AND (portal_videos.pv_nombre LIKE '%".$buscar."%' OR DATE(portal_videos.pv_fecsub) ='".$fecha."')");
        if($query->num_rows()>0)
        {
            return $query->result();
        }
    }

    public function getInteractivoB(){
    	$buscar=$this->security->xss_clean($this->input->post('buscar'));
        $fecha = date("Y-m-d", strtotime(str_replace('/', '-', $this->security->xss_clean($this->input->post('buscar')))));
    	 $query = $this->db->query("SELECT interactivo.codigo,interactivo.titulo,interactivo.sumilla_g,interactivo.fecha,interactivo.tags,interactivo.campania,interactivo.cliente,interactivo.ficha,SUBSTR(REPLACE(fnStripTags(interactivo.contenido),'&nbsp;',''),1,190) AS contenido FROM interactivo WHERE interactivo.estado = 1 AND (interactivo.titulo LIKE '%".$buscar."%' OR DATE(interactivo.fecha) ='".$fecha."')");
        if($query->num_rows()>0)
        {
            return $query->result();
        }
    }

    public function getGraficaB(){
    	$buscar=$this->security->xss_clean($this->input->post('buscar'));
        $fecha = date("Y-m-d", strtotime(str_replace('/', '-', $this->security->xss_clean($this->input->post('buscar')))));
    	 $query = $this->db->query("SELECT grafica.codigo,grafica.tags,grafica.campania,grafica.cliente,grafica.titulo,grafica.sumilla_g,grafica.ficha,SUBSTR(REPLACE(fnStripTags(grafica.contenido),'&nbsp;',''),1,190) AS contenido,grafica.fecha FROM grafica WHERE grafica.estado = 1 AND (grafica.titulo LIKE '%".$buscar."%' OR DATE(grafica.fecha) ='".$fecha."')");
        if($query->num_rows()>0)
        {
            return $query->result();
        }
    }

    public function getComercialesB(){
    	$buscar=$this->security->xss_clean($this->input->post('buscar'));
        $fecha = date("Y-m-d", strtotime(str_replace('/', '-', $this->security->xss_clean($this->input->post('buscar')))));
    	 $query = $this->db->query("SELECT comerciales_tv.codigo,comerciales_tv.titulo,comerciales_tv.imagen,comerciales_tv.fecha,comerciales_tv.tags,comerciales_tv.campania,comerciales_tv.cliente,comerciales_tv.ficha,SUBSTR(REPLACE(fnStripTags(comerciales_tv.contenido),'&nbsp;',''),1,190) AS contenido,comerciales_tv.video,comerciales_tv.motivo FROM comerciales_tv WHERE comerciales_tv.estado = 1 AND (comerciales_tv.titulo LIKE '%".$buscar."%' OR DATE(comerciales_tv.fecha) ='".$fecha."')");
        if($query->num_rows()>0)
        {
            return $query->result();
        }
    }
}