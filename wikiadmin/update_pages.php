<?php
$base_dir = "../../";
$dynamics = ["publicaciones", "esenciales"];
echo "<ol>\n";
foreach($dynamics as $dynamic) {
	ob_start();
	include($base_dir."source/$dynamic.php");
	$content = ob_get_clean();
	file_put_contents($base_dir."public/$dynamic.html", $content);
	echo "<li><a href='$dynamic.html'>$dynamic.html</a> Updated!</li>";	
}
echo "</ol>";


