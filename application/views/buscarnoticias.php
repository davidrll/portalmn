<?php
$persona = $_GET['term'];
 
require_once('inc/conex.php');
 
$consulta = "SELECT codigo AS value, titulo AS label FROM noticias WHERE nombres LIKE '%$titulo%'";
 
$result = $mysqli->query($consulta);
 
if($result->num_rows > 0){
    /*while($fila = $result->fetch_array()){
        $personas[] = $fila['nombres'];
    }
	echo json_encode($personas);*/
	while($row = $result->fetch_array(MYSQL_ASSOC)) {
    	$myArray[] = $row;
	}
	echo json_encode($myArray);
}