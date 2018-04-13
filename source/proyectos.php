<?php include("microfw.php");

$context = [
	'_TITLE' =>'Proyectos | Wikipólitica Jalisco',
	'_CSS' => ['css/index.css'],
	'_ACTIVE' => 'proyectos',
];

render('main', $context, function($context){
	extract($context);
	?>
	
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
	
	<?php
});
?>