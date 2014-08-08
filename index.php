<?php 

set_time_limit(0);

include 'conexion.php';

$metodo = array('http' => array('method' => 'GET'));

$url = 'http://wikipedia.org/';

$config = stream_context_create($metodo);

$config_final = file_get_contents(''.$url.'', false, $config);

preg_match_all('|<a class="link-box" href="(.*)"|sU',$config_final,$enlaces);

//print_r($enlaces);

foreach($enlaces[1] as $row){
	$urldata = str_replace('//','http://',$row);
	$seleccion = "select url from libs where url='$urldata'";
	$bdselect = mysql_query($seleccion);
	$num = mysql_num_rows($bdselect);
	if($num==0){
		$sql_insert = "insert into libs(url, divs) values('$urldata',0)";
		mysql_query($sql_insert) or die(mysql_error());
	}
}

header("Location:evalua.php");

?>