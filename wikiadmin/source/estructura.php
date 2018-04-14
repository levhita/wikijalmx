<?php
include("microfw.php");

$context = [
	'_TITLE' =>'Estructura | Wikipólitica Jalisco',
	'_CSS' => ['css/index.css'],
	'_ACTIVE' => 'estructura',
];

render('main', $context, function($context){
	extract($context);
	?>

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
	<img src="images/estructura.png" alt="Estructura"/>
	
	<?php
});
?>