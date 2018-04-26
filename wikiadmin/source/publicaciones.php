<?php
include_once('db.php');
include_once('microfw.php');


$context = [
	'_TITLE' =>'Publicaciones | Wikipólitica Jalisco',
	'_CSS' => ['css/publicaciones.css'],
	'_JS' => [],
	'_ACTIVE' => 'publicaciones',
];

$Query = $Db->prepare("SELECT * from posts ORDER BY date DESC;");
$Query->execute();
$context['posts'] = $Query->fetchAll(PDO::FETCH_OBJ);

render('main', $context, function($context){
	extract($context);
	?>
	<section id="inicio">
		<div class="container">
			<h1>PUBLICACIONES<br>RECIENTES</h1>
			
			<p>La pluralidad de ideas es una constante en Wikipolítica, varios de nuestros integrantes cuentan con columnas, las compartimos para tu lectura.</p>
			
		</div>
	</section>

	<section id="publicaciones">
		<div class="container">
			
			<div class="row">
				<?php foreach($posts as $post): ?>
					<div class="col-lg-4 col-md-6">
						<div class="card">
							<img class="card-img-top" src="<?=$post->img?>" alt="<?=htmlspecialchars($post->author)?>">
							<div class="card-body">
								<h5 class="card-title"><?=htmlspecialchars($post->title)?></h5>
								<p class="card-text"><?=htmlspecialchars($post->abstract)?></p>
							</div>
							<div class="card-footer">
								<div class="small" style="float:left"><strong><?=htmlspecialchars($post->author)?></strong><br><?=$post->date?></div>
								<div class="right"><a target="_blank" href="<?=$post->url?>" class="btn pink" title="¡Ay que ler!">Leer</a></div>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
	<?php
});
?>