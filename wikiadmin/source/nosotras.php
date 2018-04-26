<?php
include("microfw.php");

$context = [
	'_TITLE' =>'Nosotras | Wikipólitica Jalisco',
	'_CSS' => ['css/nosotras.css'],
	'_JS' => [],
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

			<p>Formamos parte de la red nacional <a class="inverted" href="http://wikipolitica.mx/" target="_blank">Wikipólitica MX</a>.</p>
			<br><br>
			<div class="row">
				<div class="col-md-4 center">
					<a class="btn green" href="#participar">¿Cómo ser parte?</a>
				</div>
				<div class="col-md-4 center">
					<a class="btn pink" href="#que">¿En qué creemos?</a>
				</div>
				<div class="col-md-4 center">
					<a class="btn yellow" href="#historia">Nuestra Historia</a>
				</div>

			</div>


		</div>
	</section>

	<section id="porque">
		<div class="container">
			<h1>POR QUÉ CONSTRUIR<br>UNA NUEVA PÓLITICA</h1>

			<p>Somos la mayoría quienes queremos construir un nuevo futuro, quienes no nos sentimos representados por la clase política actual y no queremos seguir delegando la política a quienes la hacen para unos cuantos.</p>

			<p>Estamos en un momento crucial para la historia, ante una crisis  de modelo económico y democrático que deja a la mayoría fuera de las decisiones y protecciones del poder. Nuestro país se enfrenta a nuevas amenazas y somos las personas quienes debemos preguntarnos qué clase de nación queremos construir para las próximas décadas.</p>

			<p>El cambio no puede estar sólo en uno, debemos organizarnos y actuar en red para recuperar las instituciones para las personas y hacerlas trabajar por el bien común.</p>

			<p>Creemos que una nueva política es posible, ésa que viene de su gente, que se construye en colectivo, que hace las preguntas que hoy son necesarias y reconoce el derecho a un futuro mejor para todos y todas. Es por esto que estamos aquí.</p>
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
			<p class="right">
				Conoce nuestros <a class="inverted" href="principios_valores.html">&nbsp;&nbsp;principios y valores&nbsp;&nbsp;</a> a más detalle.</a>
			</p>
		</div>

	</section>

	<section id="historia">
		<div class="container">

			<h1>NUESTRA<br>HISTORIA</h1>
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

	<section id="participar">
		<div class="container">
			<h1>CÓMO PARTICIPAR EN<br>
			WIKIPOLÍTICA JALISCO</h1>
			<p>Después de transitar por distintos modelos de asambleas, comisiones y juntas periódicas, nos hemos convencido de que <strong>la mejor forma de hacer Wikipolítica es de manera abierta</strong>. Cualquier persona puede participar e involucrarse en el trabajo y toma de decisiones hasta donde su compromiso y los principios que compartimos lo permitan.</p>

			<p>Todas las personas que estamos aquí somos wikis. Por eso son tan importantes <strong>las temperaturas de participación</strong>, que nos permiten organizarnos y actuar como una red, fundamentada en reconocernos y reconocer la diversidad de voluntades que forman esta  generosa comunidad en lo virtual y presencial.</p>

			<p>Nos vemos <strong>una vez al mes en los Encuentros Mensuales</strong> de la comunidad, <strong>colaboramos en proyectos</strong> y nos mantenemos en comunicación por <strong>canales virtuales</strong>, donde podemos aprender y convivir mientras hacemos política entre personas comunes.</p>

			<div class="reverse">
				El primer paso para participar es asistir a alguno de los <strong>Encuentros Mensuales*</strong>. En ellos podrás registrarte como wiki, impartir un taller o unirte a algúna de las mesas de trabajo.
			</div>
			<div class="right small">* La invitación es siempre abierta y anunciada en nuestras redes sociales.</div>

		</div>
	</section>
	<section id="discutimos">
		<div class="container">
			<h1>¿Cómo Discutimos?</h1>
			<p>En Wikipolítica <strong>privilegiamos el diálogo</strong> donde pueden escucharse todas las voces. Creemos que <strong>la deliberación colectiva vale la pena</strong>, aunque reconocemos la complejidad de llevarse de manera sostenible entre muchas personas.</p>

			<p>Es por esto que <strong>buscamos constantemente innovar en la forma en la que discutimos y tomamos decisiones</strong>. Esto nos ha permitido reconocer prácticas deseables para cada tipo de espacio de discusión, ya sea <strong>presencial o virtual</strong>.</p>
			
			<p>Partimos de <strong>ser excelentes en todo momento</strong>, eso implica el respeto al tiempo y opinión de otras personas, saber complementar o refutar las ideas sin olvidar que hay una persona con un contexto y motivaciones válidas detrás. <strong>Asumimos buena fe y colaboramos</strong> sin dejar de nutrir nuestro sentido crítico colectivamente.</p>

			<p>Para <strong>decisiones trascendentales</strong> de la organización, como la votación de cargos y de asuntos de la estrategia general de Wikipolítica Jalisco, <strong>se deben sumar los méritos</strong> suficientes para acceder al derecho al voto, el cual se ejerce en Asambleas Semestrales y en canales virtuales.</p>
		</div>
	</section>
	
	<div>
		<img src="images/meritos.png" alt="sistema de méritos" style="width:100%"/>
	</div>
	
	<?php
});
?>