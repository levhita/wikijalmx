<?php
include('config.php');
$dynamics = ["publicaciones", "esenciales", "proyectos"];
foreach($dynamics as $dynamic) {
	ob_start();
	include("source/$dynamic.php");
	$content = ob_get_clean();
	file_put_contents("$public_folder$dynamic.html", $content);
	echo "$dynamic.html Updated!<br>";	
}