<?php include("microfw.php");

$context = [
	'_TITLE' =>'Nosotras | Wikipólitica Jalisco',
	'_CSS' => ['nosotras.css'],
	'_ACTIVE' => 'nosotras',
];

render('main', $context, function($context){
	extract($context);
	?>
	
	<section id="inicio">
		<div class="container">
			<h1>QUÉ ES<br>WIKIPÓLITICA</h1>
			<p>
				Somos una red de personas que buscamos nuevas formas de hacer política en colectivo.<br>
				Apostamos por la apertura y la colaboración para organizarnos e incidir sobre lo público, tanto tejiendo redes con movimientos sociales y organizaciones de la sociedad civil, como ocupando espacios de gobierno para abrirlos hacia la participación de más personas.
			</p>

			<p>Formamos parte de la red nacional <strong>Wikipólitica MX</strong>.</p>
			<br><br><br>
			<div class="row">
				<div class="col center">
					<a class="btn hot_pink" href="#que">¿En qué creemos?</a>
				</div>
				<div class="col center">
					<a class="btn hot_yellow" href="#historia">Un poco de historia</a>
				</div>
				<div class="col center">
					<a class="btn hot_green" href="como">¿Cómo ser parte?</a>
				</div>
			</div>


		</div>
	</section>

	<section id="porque">
		<div class="container">
			<h1>POR QUÉ CONSTRUIR<br>UNA NUEVA PÓLITICA</h1>

			<p>Somos la mayoría quienes queremos construir un nuevo futuro, quienes no nos sentimos representados por la clase política actual y no queremos seguir delegando la política a quienes la hacen para unos cuantos.</p>

			<p>Estamos en un momento crucial para la historia, ante una crisis  de modelo económico y democrático que deja a la mayoría fuera de las decisiones y protecciones del poder. Nuestro país se enfrenta a nuevas amenazas y somos las personas quienes debemos preguntarnos qué clase de nación queremos construir para las próximas décadas.</p>

			<p>El cambio no puede estar sólo en uno, debemos organizarnos y actuar en red para recuperar las instituciones para las personas y hacerlas trabajar por el bien común.<br>
			Creemos que una nueva política es posible, ésa que viene de su gente, que se construye en colectivo, que hace las preguntas que hoy son necesarias y reconoce el derecho a un futuro mejor para todos y todas. Es por esto que estamos aquí.</p>
		</div>
	</section>

	<section id="que">
		<div class="container">
			<h1>EN QUÉ CREEMOS</h1>

			<p>Partimos de un piso común donde nos reconocemos y comenzamos a construir colectivamente un futuro para todas las personas. Éste implica búsquedas y prácticas que hemos acordado que son fundamentales para reinventar la política.</p>

			<div class="row">
				<div class="col-lg">
					<h2>Principios de Wikipolítica</h2>

					<p>Propuestas fundamentales para la organización, el funcionamiento y las acciones de todos los nodos de Wikipolítica que se encuentran siempre presentes —explícita o implícitamente— en los objetivos y agendas que perseguimos nacional y localmente.</p>

					<ul>
						<li>Democracia real y participativa.</li>
						<li>Derechos humanos</li>
						<li>Localismo</li>
						<li>Rendición de cuentas</li>
						<li>Justicia social</li>
						<li>Innovación disruptiva</li>
						<li>Inteligencia colectiva</li>
						<li>Pedagogía política</li>
						<li>Apertura e inclusión</li>
						<li>Feminismo</li>
					</ul>

				</div>
				<div class="col-lg">
					<h2>Valores de Wikipolítica</h2>

					<p>Estándares de comportamiento que defendemos, suscribimos y compartimos todas las personas de Wikipolítica y que expresan, en su conjunto, nuestra visión ideal y colectiva del actuar en la política.</p>

					<ul>
						<li>Honestidad</li>
						<li>Solidaridad</li>
						<li>Comunidad</li>
						<li>Deliberación</li>
						<li>Resiliencia</li>
					</ul>

				</div>
			</div>
			<p class="right">Conoce nuestros <a class="reverse" href="principios_valores.html">&nbsp;&nbsp;principios y valores&nbsp;&nbsp;</a> a más detalle.</a></p>
		</div>

	</section>

	<section id="historia">
		<div class="container">
			
			<h1>UN POCO<br>DE HISTORIA...</h1>
			<p>Wikipolítica nace como organización en verano de 2014. Sus inicios se remontan a la efervescencia política vivida durante el 2012 y los primeros intentos que le siguieron para articular el descontento hacia una nueva política que nos hiciera sentido. A continuación presentamos una línea del tiempo sobre Wikipolítica Jalisco y sus antecedentes.</p>
			<div id="historyCarousel" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#historyCarousel" data-slide-to="0" class="active"></li>
					<?php for($i=1;$i<=10;$i++):?>
						<li data-target="#historyCarousel" data-slide-to="<?=$i?>"></li>
					<?php endfor;?>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="images/historia/historia0.jpg" alt="Historia 0">
					</div>
					<?php for($i=1;$i<=10;$i++):?> 
						<div class="carousel-item">
							<img class="d-block w-100" src="images/historia/historia<?=$i?>.jpg" alt="Historia <?=$i?>">
						</div>
					<?php endfor;?>
				</div>
				<a class="carousel-control-prev" href="#historyCarousel" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#historyCarousel" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			
		</div>
	</section>

	<?php
});
?>