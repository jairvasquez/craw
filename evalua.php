<?php 

set_time_limit(0);

include 'conexion.php';

$metodo = array('http' => array('method' => 'GET'));

$sql = "select id,url from libs where divs=0";

$r = mysql_query($sql);

while($f = mysql_fetch_array($r)){
	$url = $f['url'];
	$config = stream_context_create($metodo);
	$config_final = file_get_contents($url, false, $config);
	preg_match_all('|<title>(.*)</title>|sU',$config_final,$titulo);
	echo "Url Visitada: ".$url;
	echo "<br/>Titulo: ".$titulo[1][0]."<hr>";
}

?>