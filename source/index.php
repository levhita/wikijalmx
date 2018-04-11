<?php include("microfw.php");

$context = [
	'_TITLE' =>'Wikipólitica Jalisco',
	'_CSS' => ['index.css'],
	'_ACTIVE' => 'inicio',
];

render('main', $context, function($context){
	extract($context);
	?>
	
	<section class="container" id="inicio">
		<h1>SOMOS<br>MUCHAS</h1>
		<h1>Y YA NOS<br>ENCONTRAMOS</h1>
	</section>
	<hr>
	<section class="container" id="nosotras">
		<h1>QUÍENES<br>SOMOS</h1>
		<p>
			Somos una red de personas que buscamos nuevas formas de hacer política en colectivo.<br>
			Apostamos por la apertura y la colaboración para organizarnos e incidir sobre lo público, tanto tejiendo redes con movimientos sociales y organizaciones de la sociedad civil, como ocupando espacios de gobierno para abrirlos hacia la participación de más personas.
		</p>

		<p>Formamos parte de la red nacional <strong>Wikipólitica MX</strong>.</p>

		<div class="row">
			<div class="col center">
				<a class="btn green" href="como">Cómo ser parte</a>
			</div>
			<div class="col center">
				<a class="btn pink" href="como">Lo que nos mueve</a>
			</div>
			<div class="col center">
				<a class="btn yellow" href="como">Un poco de historia</a>
			</div>
		</div>
		
	</section>
	<section class="container" id="proyectos">
		<div class="row">
			<div class="col-8">
				<h1>PROYECTOS</h1>
				<p>Estas son nuestras iniciativas (temporales o permanentes), promovidas por las y los miembros de nuestra comunidad.</p>

				<p>Este nivel de participación, sugiere que un equipo de personas voluntarias, se reúnan virtual y/o físicamente con el objetivo de diseñar, implementar y dar seguimiento a una estrategia de incidencia pública, con el requisito único de que ésta, sea acorde con los principios y valores de Wikipolítica MX.</p>
			</div>
			<div class="col-4 center">
				<img src="images/icons/download.png" alt="download"/>
				<h3>Descarga</h3>
				<p>Pensamos nuestros proyectos de acuerdo a su relevancia estratégica y a su temporalidad.</p>
				<p>
					¿Tienes una idea?<br>
					Conoce la "Guía para la generación de proyectos".
				</p>
				<a class="btn yellow" href="https://docs.google.com/document/d/11kY6WkmQFAQr22FohlOGIeg-0IfHL4K7_2bWGQ6aOZ4/edit?usp=sharing">Link de Descarga</a>
			</div>
		</div>
	</section>
	
	<div class="container-fluid" id="lista_proyectos">
		<div class="row">
			<div class="col-lg" id="sinvoto">
				<h3>#SinVotoNoHayDinero</h3>
				<p>Conoce el Proyecto</p>
			</div>
			<div class="col-lg" id="informe">
				<h3>#InformeBajoLaLupa</h3>
				<p>Conoce el Proyecto</p>
			</div>
			<div class="col-lg" id="observatorio">
				<h3>Observatorio CEDHJ- SEA</h3>
				<p>Conoce el Proyecto</p>
			</div>
		</div>

		<div class="row">
			<div class="col-lg" id="ocupacion">
				<h3>Festival "La Ocupación"</h3>
				<p>Conoce el Proyecto</p>
			</div>
			<div class="col-lg" id="presupuesto">
				<h3>#NuestroPresupuesto</h3>
				<p>Conoce el Proyecto</p>
			</div>
			<div class="col-lg" id="var">
				<h3>#VamosAReemplazarles</h3>
				<p>Conoce el Proyecto</p>
			</div>
			<div>
			</div>
		</div>
	</div>
	
	<section class="container" id="wiki_data">
		<h1>WIKI<br>DATOS</h1>
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
	</section>
	
	<section class="container" id="estructura">
		<div class="row">
			<div class="col-8">
				<h1>NODO<br>JALISCO</h1>
				<p>Wikipolítica MX es una red que se conforma por Nodos, mismos que tienen facultades para organizarse localmente.</p>

				<p>En nuestra Entidad, lo hacemos de conformidad con nuestro Reglamento y siempre en constante apego a los principios, valores e identidad de la Red Nacional, de ésta manera, promovemos la agenda, proyectos, y objetivos particulares que decidimos, de manera colectiva, desarrollar entre los que integramos esta comunidad en el Estado de Jalisco.</p>
			</div>
			<div class="col-4">
				<img src="images/icons/location.png" alt="location"/>
				<p>Estamos también en 9 Estados del país:</p>
				<ul>
					<li><a href="https://www.facebook.com/WikipoliticaCDMX">CDMX</a></li>
					<li><a href="https://www.facebook.com/WikipoliticaBCS/">Baja California Sur</a></li>
					<li><a href="https://www.facebook.com/WikipoliticaSLP/">San Luis Potosí</a></li>
					<li><a href="https://www.facebook.com/WikipoliticaChih/">Chihuahua</a></li>
					<li><a href="https://www.facebook.com/WikipoliticaYuc/">Yucatán</a></li>
					<li><a href="https://www.facebook.com/WikipoliticaEdoMex">Estado de México</a></li>
					<li><a href="https://www.facebook.com/WikipoliticaQROO/">Quintana Roo</a></li>
					<li><a href="https://www.facebook.com/WikipoliticaNL/">Nuevo León</a></li>
					<li><a href="https://www.facebook.com/wikipoliticamichoacan/">Michoacán</a></li>
				</ul>
			</div>
		</div>
	</section>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg asamblea_local">
				<p>Asamblea Local</p>
			</div>
			<div class="col-lg consejo_politico">
				<p>Consejo Político</p>
			</div>
			<div class="col-lg consejo_vigilancia">
				<p>Consejo de Vigilancia</p>
			</div>
			<div class="col-lg equipo_ejecutivo">
				<p>Equipo Ejecutivo</p>
			</div>
		</div>
	</div>
	
	<section class="container" id="contacto">
		<?php include('views/contact.php'); ?>
	</section>
	
	<?php
});
?>