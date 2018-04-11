<?php include("microfw.php");

$context = [
	'_TITLE' =>'Contacto',
	'_CSS' => [],
	'_ACTIVE' => 'contacto',
];

render('main', $context, function($context){
	extract($context);
	?>
	<section class="container" id="contacto">
		<?php include('views/contact.php'); ?>
	</section>
	<?php
});
?>