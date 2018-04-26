<?php
include("microfw.php");

$context = [
	'_TITLE' =>'Estructura | Wikipólitica Jalisco',
	'_CSS' => ['css/estructura.css'],
	'_JS'  => [],
	'_ACTIVE' => 'estructura',
];

$context['consejo_politico'] = [
	['Daniel Iñiguez','transparencio.publico@gmail.com','danieliniguez'],
	['Andrés Flores','andresfloresdelacruz@hotmail.com','iAndresFlores'],
	['Andrés Barrios','	andres@generaweb.net ','huampoyotl'],
	['Luis Landivar','luislandivar@gmail.com',''],
	['Ana Vicencio','anawikivic@gmail.com','anavehache'],
	['Alejandra Parra','aleparrac@gmail.com','aleparrac'],
];
$context['consejo_vigilancia'] = [
	['Álvaro Quintero','alvaro.quintero@kumamoto.mx','alvaro_qc'],
	['Mariela Elizondo','melizondogtz@gmail.com','Wall_a_bee'],
	['Pablo Guízar','pablo.guib@gmail.com','pablo_guizar'],
];

$context['equipo_ejecutivo'] = [
	'COORDINACION GENERAL' => [
		['Daniel Villalba','d.vinculacion.wiki@gmail.com','TachiVil'],
	],
	'COMUNICACION' => [
		['Hugo Charles','hugo.charles16@gmail.com','HugoCharlesB'],
		['Edgar Quintana','el.edgar.seis@gmail.com','edgarseis'],
		['Susana Ramirez','yuyuramirez15@gmail.com','su_bravo'],
	],
	'TESORERIA' => [
		['Maria Espinosa','mayesaurio@gmail.com','Mayesaurio'],
		['Hugo Jiménez','hugoayipey@gmail.com','hugoayipey'],
	],
	'PROYECTOS' => [
		['Emilio Ritter','emilioritter.91@gmail.com','EERitter'],
		['Dinora Villalobos','dinoravillalobos29@gmail.com',''],
	],
	'VINCULACIÓN' => [
		['Daniel Villalba','d.vinculacion.wiki@gmail.com','TachiVil'],
	],
	'COMUNIDAD' => [
		['Andrés Flores','andresfloresdelacruz@hotmail.com','iAndresFlores'],
		['Juan Blackaller','juanblacka@gmail.com','juanblackaller'],
		['Alain Usiel Mendoza Carrillo','habikainmobiliaria@gmail.com','alainmendoza'],
	],
	'SECRETARÍA TÉCNICA' => [
		['Daniel Padilla','gdanielpg@gmail.com','gdanielpadilla'],
		['Mario Vazquez','jmariusgdl@gmail.com','JM4rio'],
	],
];

render('main', $context, function($context){
	extract($context);
	?>

	<section class="container" id="inicio">
		<div class="row">
			<div class="col-md-8">
				<h1>NODO<br>JALISCO</h1>
				<p>Wikipolítica MX es una red que se conforma por Nodos, mismos que tienen facultades para organizarse localmente.</p>

				<p>En nuestra Entidad, lo hacemos de conformidad con nuestro Reglamento y siempre en constante apego a los principios, valores e identidad de la Red Nacional, de ésta manera, promovemos la agenda, proyectos, y objetivos particulares que decidimos, de manera colectiva, desarrollar entre los que integramos esta comunidad en el Estado de Jalisco.</p>
			</div>
			<div class="col-md-4 otros">
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
			<div class="col-lg-6 estructura" id="asamblea_local">
				<h1>Asamblea Local</h1>
				<p>
					Es el máximo órgano de decisión de Wikipolítica Jalisco. Está conformada por <strong>todas las personas Asambleístas</strong>, y es el órgano encargado de designar al Consejo Político, los Coordinadores, y al Consejo de Vigilancia, así como de votar las decisiones importantes para el Nodo. 
				</p>
				
				<button type="button" class="btn pink" data-toggle="modal" data-target=".detalle_asamblea">Ver Miembros</button>
				

			</div>
			<div class="col-lg-6 estructura" id="consejo_politico">
				<h1>Consejo Político</h1>

				<p>
					Órgano representativo de Wikipolítica Jalisco para la toma de decisiones estratégicas apegadas a los principios, valores y agendas de Wikipolítica MX y Wikipolítica Jalisco.
				</p>
				
				<button type="button" class="btn green" data-toggle="modal" data-target=".detalle_consejo_politico">Ver Miembros</button>
				
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 estructura" id="consejo_vigilancia">
				<h1>Consejo de Vigilancia</h1>
				<p>
					Es el órgano encargado de vigilar el cumplimiento del presente reglamento, verifica los supuestos de infracciones, esclarece y solventa cualquier tipo de situación que pueda aparentar un riesgo para la organización, aplica las sanciones, y resuelve los conflictos entre Integrantes de la organización. 
				</p>

				<button type="button" class="btn pink" data-toggle="modal" data-target=".detalle_consejo_vigilancia">Ver Miembros</button>

			</div>
			<div class="col-lg-6 estructura" id="equipo_ejecutivo">
				<h1>Equipo Ejecutivo</h1>
				<p>
					Es el equipo designado por la Coordinación y ratificado por el Consejo Político, encargado de las tareas técnicas y operativas que se requieren para la organización y de apoyar en la ejecución de proyectos del Nodo. Algunas de estas tareas podrán ser, entre otras: finanzas, procuración de fondos, asuntos jurídicos, logística y comunicación. 
				</p>
				
				<button type="button" class="btn pink" data-toggle="modal" data-target=".detalle_equipo_ejecutivo">Ver Miembros</button>
				
			</div>
		</div>
	</div>
	
	<div class="container">
		<img width="100%" src="images/estructura.png" alt="Estructura"/>
	</div>
	

	<div class="modal fade detalle_asamblea" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title">Asamblea Local</h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="alert alert-secondary" role="alert">
						<strong>Nota:</strong> Ésta lista está conformada por 96 miembros al día de hoy(pero cambía en todo momento dependiendo de las temperaturas de participación), se está compilando la información para su presentación.
					</div>

				</div>
			</div>
		</div>
	</div>

	<div class="modal fade detalle_equipo_ejecutivo" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title">Equipo Ejecutivo</h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<table class="table table-borderless">
						<?php foreach($equipo_ejecutivo AS $section => $miembros):?>
							<thead class="thead-dark"><th colspan="3"><?=$section?></th></thead>
							<?php foreach($miembros AS $miembro):?>
								<tr>
									<td><?=$miembro[0]?></td>
									<td><a href="mailto:<?=$miembro[1]?>"><?=$miembro[1]?></a></td>
									<td><a href="https://twitter.com/<?=$miembro[2]?>" target="_blank"><?=!empty($miembro[2])?'@'.$miembro[2]:''?></a></td>
								</tr>
							<?php endforeach; ?>
						<?php endforeach; ?>
					</table>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade detalle_consejo_vigilancia" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title">Consejo de Vigilancia</h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<table class="table table-striped">
						<thead><th>Nombre</th><th>Correo Electrónico</th><th>Twitter</th></thead>
						<tbody>
							<?php foreach($consejo_vigilancia AS $miembro):?>
								<tr>
									<td><?=$miembro[0]?></td>
									<td><a href="mailto:<?=$miembro[1]?>"><?=$miembro[1]?></a></td>
									<td><a href="https://twitter.com/<?=$miembro[2]?>" target="_blank">@<?=$miembro[2]?></a></td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


	<div class="modal fade detalle_consejo_politico" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title">Consejo Político</h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<table class="table table-striped">
						<thead><th>Nombre</th><th>Correo Electrónico</th><th>Twitter</th></thead>
						<tbody>
							<?php foreach($consejo_politico AS $miembro):?>
								<tr>
									<td><?=$miembro[0]?></td>
									<td><a href="mailto:<?=$miembro[1]?>"><?=$miembro[1]?></a></td>
									<td><a href="https://twitter.com/<?=$miembro[2]?>" target="_blank"><?=!empty($miembro[2])?'@'.$miembro[2]:''?></a></td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>	
				</div>
			</div>
		</div>
	</div>
	<?php
});
?>