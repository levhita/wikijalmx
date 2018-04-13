<?php include("microfw.php");

$context = [
	'_TITLE' =>'Wikipólitica Jalisco',
	'_CSS' => ['css/index.css'],
	'_ACTIVE' => 'esenciales',
];

render('main', $context, function($context){
	extract($context);
	?>
	<section id="wiki_data">
		<div class="container">
			<h1>WIKI<br>DATOS</h1>
			<br>
			<div class="row">
				<div class="col">
					<h2>92</h2>
					<p>Asambleistas Locales</p>
				</div>
				<div class="col">
					<h2>690</h2>
					<p>Integrantes en Jalisco</p>
				</div>
				<div class="col">
					<h2>11</h2>
					<p>Proyectos Emprendidos</p>
				</div>
				<div class="col">
					<h2>12,603</h2>
					<p>Tazas de Café</p>
				</div>
			</div>
		</div>
	</section>
	<?php
});
?>