<?php include("microfw.php");

$context = [
	'_TITLE'=>'Wikipólitica Jalisco',
];

render('main', $context, function($context){
	extract($context);
	?>
	
	<div class="container" id="inicio">
		<h1>SOMOS<br>MUCHAS</h1>
		<h1>Y YA NOS<br>ENCONTRAMOS</h1>
	</div>
	<hr>
	<div class="container" id="nosotras">
		<h1>QUÍENES<br>SOMOS</h1>
		<p>
			Somos una red de personas que buscamos nuevas formas de hacer política en colectivo.<br>
			Apostamos por la apertura y la colaboración para organizarnos e incidir sobre lo público, tanto tejiendo redes con movimientos sociales y organizaciones de la sociedad civil, como ocupando espacios de gobierno para abrirlos hacia la participación de más personas.
		</p>

		<p>Formamos parte de la red nacional <strong>Wikipólitica MX</strong>.</p>

		<div class="row">
			<div class="col">
				<a class="button" href="como">Cómo ser parte</a>
			</div>
			<div class="col">
				<a class="button" href="como">Lo que nos mueve</a>
			</div>
			<div class="col">
				<a class="button" href="como">Un poco de historia</a>
			</div>
		</div>
		
	</div>
	<hr>
	<?php
});
?>