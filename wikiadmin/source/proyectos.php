<?php
include_once('db.php');
include_once('microfw.php');

$context = [
	'_TITLE' =>'Proyectos | Wikipólitica Jalisco',
	'_CSS' => ['css/proyectos.css'],
	'_JS' => [],
	'_ACTIVE' => 'proyectos',
];

$Query = $Db->prepare("SELECT * from projects WHERE active=1 ORDER BY `ordering` ASC;");
$Query->execute();
$context['projects'] = $Query->fetchAll(PDO::FETCH_OBJ);

$Query = $Db->prepare("SELECT * from projects WHERE active=0 ORDER BY `ordering` ASC;");
$Query->execute();
$context['archives'] = $Query->fetchAll(PDO::FETCH_OBJ);

render('main', $context, function($context){
	extract($context);
	?>
	
	<section  id="proyectos">
		<div class="container">
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
					<a class="btn pink" href="https://docs.google.com/document/d/11kY6WkmQFAQr22FohlOGIeg-0IfHL4K7_2bWGQ6aOZ4/edit?usp=sharing">Enlace de Descarga</a>
				</div>
			</div>
		</div>
	</section>
	
	<div id="active">
		<div class="container">
			<h1>PROYECTOS<br>ACTIVOS</h1>
			<p>Existen miembros activos monitoreando y llevando acciones alrededor de estos proyectos, y tú también puedes unirte.</p>
			<div class="row">
				<?php foreach($projects as $project): ?>
					<div class="col-lg-4 col-md-6">
						<div class="card">
							<img class="card-img-top" src="<?=$project->img?>">
							<div class="card-body">
								<h5 class="card-title"><?=htmlspecialchars($project->title)?></h5>
								<p class="card-text"><?=htmlspecialchars($project->abstract)?></p>
							</div>
							<?php if(!empty($project->url)):?>
								<div class="card-footer">
									<div class="right"><a target="_blank" href="<?=$project->url?>" class="btn pink" title="¡Ay que ler!">Sitio</a></div>
								</div>
							<?php endif;?>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>

	<div id="archive">
		<div class="container">
			<h1>HISTORICO DE<br>PROYECTOS</h1>
			
			<p>Estos proyectos no están actualmente activos, pero son suceptibles de reactivarse en cualquier momento, ya sea por un contexto social similar al que los detonó en primer lugar, o por interes de los miembros de Wikipólitica.</p>

			<div class="row">
				<?php foreach($archives as $project): ?>
					<div class="col-lg-4 col-md-6">
						<div class="card">
							<img class="card-img-top" src="<?=$project->img?>">
							<div class="card-body">
								<h5 class="card-title"><?=htmlspecialchars($project->title)?></h5>
								<p class="card-text"><?=htmlspecialchars($project->abstract)?></p>
							</div>
							<?php if(!empty($project->url)):?>
								<div class="card-footer">
									<div class="right"><a target="_blank" href="<?=$project->url?>" class="btn pink" title="¡Ay que ler!">Sitio</a></div>
								</div>
							<?php endif;?>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
	
	<?php
});
?>