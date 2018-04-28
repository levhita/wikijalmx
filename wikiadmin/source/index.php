<?php
include("microfw.php");

$context = [
	'_TITLE' =>'Inicio | Wikipolítica Jalisco',
	'_CSS' => ['css/index.css'],
	'_JS' => [],
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
					<h2><a href="nosotras.html" alt="Nosotras">690</a></h2>
					<p><a href="nosotras.html" alt="Nosotras">Integrantes en Jalisco</a></p>
				</div>
				<div class="col">
					<h2><a href="estructura.html" alt="Estructura">107</a></h2>
					<p><a href="estructura.html" alt="Estructura">Asambleístas Locales</a></p>
				</div>
				<div class="col">
					<h2><a href="proyectos.html">11</a></h2>
					<p><a href="proyectos.html">Proyectos Emprendidos</a></p>
				</div>
				<div class="col">
					<h2><a href="calendario.html">16</a></h2>
					<p><a href="calendario.html">Encuentros Mensuales</a></p>
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
					Formamos parte de la red nacional <a class="inverted" href="http://wikipolitica.mx/" target="_blank">Wikipolítica</a>.
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
					<a class="btn yellow" href="historia.html">Historia</a>
				</div>
			</div>

		</div>
	</section>
	
	<section class="container-fluid" id="proyectos">
		
		<div class="row">
			<div class="col-lg-6 left_section">
				<h1>PROYECTOS</h1>
				<h3>Estas son nuestras iniciativas  promovidas por las y los miembros de nuestra comunidad.</h3>

				<p>Este nivel de participación sugiere que un equipo de personas voluntarias se reúnan virtual y/o físicamente con el objetivo de diseñar, implementar y dar seguimiento a una estrategia de incidencia pública, con el requisito único de que ésta sea acorde con los principios y valores de Wikipolítica MX.</p>

				<p class="right">
					<a href="proyectos.html" class="btn pink">Proyectos</a>
				</p>
			</div>


			<div class="col-lg-6 right_section">
				<h1>NODO JALISCO</h1>
				<h3>Wikipolítica MX es una red que se conforma por Nodos, mismos que tienen facultades para organizarse localmente.</h3>

				<p>En nuestra entidad lo hacemos de conformidad con nuestro reglamento y siempre en constante apego a los principios, valores e identidad de la Red Nacional, de esta manera promovemos la agenda, proyectos y objetivos particulares que decidimos, de manera colectiva, desarrollar entre los que integramos esta comunidad en el estado de Jalisco.</p>

				<p class="right">
					<a href="estructura.html" class="btn purple">Estructura</a>
				</p>
			</div>
		</section>
		<?php
	});
	?>