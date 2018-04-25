<?php
include("microfw.php");

$context = [
	'_TITLE' =>'Inicio | Wikipólitica Jalisco',
	'_CSS' => ['css/index.css'],
	'_JS' => ['js/index.js'],
	'_ACTIVE' => 'inicio',
];

render('main', $context, function($context){
	extract($context);
	?>
	
	<section id="inicio">
		<div class="container">
			<h1>SOMOS<br>MUCHAS</h1>
			<h1 class="white">Y YA NOS<br>ENCONTRAMOS</h1>
		</div>
	</section>

	<section id="wiki_data">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2><a href="nosotras.html">92</a></h2>
					<p><a href="nosotras.html">Asambleistas Locales</a></p>
				</div>
				<div class="col">
					<h2><a href="nosotras.html">690</a></h2>
					<p><a href="nosotras.html">Integrantes en Jalisco</a></p>
				</div>
				<div class="col">
					<h2><a href="proyectos.html">11</a></h2>
					<p><a href="proyectos.html">Proyectos Emprendidos</a></p>
				</div>
				<div class="col">
					<h2 id="coffe_cups">12,603</h2>
					<p>Tazas de Café</p>
				</div>
			</div>
		</div>
	</section>
	
	<section id="nosotras">
		<div class="container">
			<div class="row">
				<div class="col-md-6 large">
					Somos una red de personas que buscamos nuevas formas de hacer política en colectivo.
				</div>
				<div class="col-md-6">
					Apostamos por la apertura y la colaboración para organizarnos e incidir sobre lo público, tanto tejiendo redes con movimientos sociales y organizaciones de la sociedad civil, como ocupando espacios de gobierno para abrirlos hacia la participación de más personas.<br>
					<br>
					Formamos parte de la red nacional <strong><a class="inverted_white" href="http://wikipolitica.mx/">Wikipólitica MX</a></strong>.
				</div>
			</div>
			<br><br>
			<div class="row">
				<div class="col-md-4 center">
					<a class="btn green" href="nosotras.html#participar">¿Cómo ser parte?</a>
				</div>
				<div class="col-md-4 center">
					<a class="btn pink" href="nosotras.html#que">¿En qué creemos?</a>
				</div>
				<div class="col-md-4 center">
					<a class="btn yellow" href="nosotras.html#historia">Nuestra Historia</a>
				</div>
			</div>

		</div>
	</section>
	
	<section class="container-fluid" id="proyectos">
		
		<div class="row">
			<div class="col-lg-6 left_section">
				<h1>PROYECTOS</h1>
				<p>Estas son nuestras iniciativas (temporales o permanentes), promovidas por las y los miembros de nuestra comunidad.</p>

				<p>Este nivel de participación, sugiere que un equipo de personas voluntarias, se reúnan virtual y/o físicamente con el objetivo de diseñar, implementar y dar seguimiento a una estrategia de incidencia pública, con el requisito único de que ésta, sea acorde con los principios y valores de Wikipolítica MX.</p>

				<p class="right"><a href="proyectos.html" class="btn pink">Nuestros Proyectos</a></p>
			</div>


			<div class="col-lg-6 right_section">
				<h1>NODO JALISCO</h1>
				<p>Wikipolítica MX es una red que se conforma por Nodos, mismos que tienen facultades para organizarse localmente.</p>

				<p>En nuestra Entidad, lo hacemos de conformidad con nuestro Reglamento y siempre en constante apego a los principios, valores e identidad de la Red Nacional, de ésta manera, promovemos la agenda, proyectos, y objetivos particulares que decidimos, de manera colectiva, desarrollar entre los que integramos esta comunidad en el Estado de Jalisco.</p>

				<p class="right"><a href="estructura.html" class="btn purple">Nuestra Estructura</a></p>
			</div>
		</section>
		<?php
	});
	?>