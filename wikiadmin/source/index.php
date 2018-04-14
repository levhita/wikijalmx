<?php
include("microfw.php");

$context = [
	'_TITLE' =>'Inicio | Wikipólitica Jalisco',
	'_CSS' => ['css/index.css'],
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
	
	<section id="nosotras">
		<div class="container">
			<h1>QUÍENES<br>SOMOS</h1>
			<p>
				Somos una red de personas que buscamos nuevas formas de hacer política en colectivo.<br>
				Apostamos por la apertura y la colaboración para organizarnos e incidir sobre lo público, tanto tejiendo redes con movimientos sociales y organizaciones de la sociedad civil, como ocupando espacios de gobierno para abrirlos hacia la participación de más personas.
			</p>

			<p>Formamos parte de la red nacional <strong>Wikipólitica MX</strong>.</p>
			<br><br><br>
			<div class="row">
				<div class="col center">
					<a class="btn hot_green" href="como">Cómo ser parte</a>
				</div>
				<div class="col center">
					<a class="btn hot_pink" href="como">Lo que nos mueve</a>
				</div>
				<div class="col center">
					<a class="btn hot_yellow" href="como">Un poco de historia</a>
				</div>
			</div>


		</div>
	</section>
	
	<section class="container" id="proyectos">
		
		<div class="row">
			<div class="col-lg-8">
				<h1>PROYECTOS</h1>
				<p>Estas son nuestras iniciativas (temporales o permanentes), promovidas por las y los miembros de nuestra comunidad.</p>

				<p>Este nivel de participación, sugiere que un equipo de personas voluntarias, se reúnan virtual y/o físicamente con el objetivo de diseñar, implementar y dar seguimiento a una estrategia de incidencia pública, con el requisito único de que ésta, sea acorde con los principios y valores de Wikipolítica MX.</p>
			</div>
			<div class="col-lg-4 descarga">
				<img src="images/icons/download.png" alt="download"/>
				<h3>Descarga</h3>
				<p>Pensamos nuestros proyectos de acuerdo a su relevancia estratégica y a su temporalidad.</p>
				<p>
					¿Tienes una idea?<br>
					Conoce la "Guía para la generación de proyectos".
				</p>
				<a class="btn yellow" href="https://docs.google.com/document/d/11kY6WkmQFAQr22FohlOGIeg-0IfHL4K7_2bWGQ6aOZ4/edit?usp=sharing">Enlace de Descarga</a>
			</div>
		</div>
	</section>
	
	<div class="container-fluid" id="lista_proyectos">
		<div class="row">
			<div class="col-lg" id="sinvoto">
				<a class="overlay" href="#">
					<h2>#SinVotoNoHayDinero</h2>
					<p>Conoce el Proyecto</p>
				</a>
			</div>
			<div class="col-lg" id="informe">
				<a class="overlay" href="#">
					<h2>#InformeBajoLaLupa</h2>
					<p>Conoce el Proyecto</p>
				</a>
			</div>
			<div class="col-lg" id="observatorio">
				<a class="overlay" href="#">
					<h2>Observatorio CEDHJ- SEA</h2>
					<p>Conoce el Proyecto</p>
				</a>
			</div>
		</div>

		<div class="row">
			<div class="col-lg" id="ocupacion">
				<a class="overlay" href="#">
					<h2>Festival "La Ocupación"</h2>
					<p>Conoce el Proyecto</p>
				</a>
			</div>
			<div class="col-lg" id="presupuesto">
				<a class="overlay" href="#">
					<h2>#NuestroPresupuesto</h2>
					<p>Conoce el Proyecto</p>
				</a>
			</div>
			<div class="col-lg" id="var">
				<a class="overlay" href="#">
					<h2>#VamosAReemplazarles</h2>
					<p>Conoce el Proyecto</p>
				</a>
			</div>
		</div>
	</div>
	
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
	
	<section class="container" id="estructura">
		<div class="row">
			<div class="col-lg-8">
				<h1>NODO<br>JALISCO</h1>
				<p>Wikipolítica MX es una red que se conforma por Nodos, mismos que tienen facultades para organizarse localmente.</p>

				<p>En nuestra Entidad, lo hacemos de conformidad con nuestro Reglamento y siempre en constante apego a los principios, valores e identidad de la Red Nacional, de ésta manera, promovemos la agenda, proyectos, y objetivos particulares que decidimos, de manera colectiva, desarrollar entre los que integramos esta comunidad en el Estado de Jalisco.</p>
			</div>
			<div class="col-lg-4 otros">
				<div class="center"><img src="images/icons/location.png" alt="location"/></div>
				<p class="center">Estamos también en 9 Estados del país:</p>
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
	
	<div class="container-fluid" id="estructura_detalle">
		<div class="row">
			<div class="col-lg" id="asamblea_local">
				<a class="overlay" href="#">
					<p>Asamblea Local</p>
				</a>	
			</div>
			<div class="col-lg" id="consejo_politico">
				<a class="overlay"  href="#">
					<p>Consejo Político</p>
				</a>
			</div>
			<div class="col-lg" id="consejo_vigilancia">
				<a class="overlay" href="#">
					<p>Consejo de Vigilancia</p>
				</a>
			</div>
			<div class="col-lg" id="equipo_ejecutivo">
				<a class="overlay"  href="#">
					<p>Equipo Ejecutivo</p>
				</a>
			</div>
		</div>
	</div>

	<?php
});
?>