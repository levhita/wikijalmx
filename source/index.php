<?php include("microfw.php");

$context = [
	'_TITLE' =>'Wikipólitica Jalisco',
	'_CSS' => ['index.css'],
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
		
	</div>
	<hr>

	<div class="container" id="proyectos">
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
				<a class="btn yellow" href="something">Link de descarga</a>
			</div>
		</div>
	</div>
	<hr>

	<div class="container-fluid proyectos">
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
	<hr>
	<?php
});
?>