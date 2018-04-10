<?php include("microfw.php");

$context = [
	'_TITLE'=>'Wikipólitica Jalisco',
];
 
render('main', $context, function($context){
	extract($context);
	?>
	
	<h1>Titulo/TITULOS</h1>
	<p>This is some content for <?=$_TITLE?>.</p>
	<p>More content.</p>

	<?php
	}
);
?>