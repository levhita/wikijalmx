<?php include("microfw.php");

$context = [
	'_TITLE'=>'Index de WikiPolitica',
];
 
render('main', $context, function($context){
	extract($context);
	?>
	
	<p>This is some content for <?=$_TITLE?>.</p>
	<p>More content.</p>

	<?php
	}
);
?>