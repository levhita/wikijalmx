<?php include("microfw.php");

$context = [
	'_TITLE' =>'Wikipólitica Jalisco &gt; Contacto',
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