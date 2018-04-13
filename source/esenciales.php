<?php
include("microfw.php");
include("db.php");
$context = [
	'_TITLE' =>'Esenciales | Wikipólitica Jalisco',
	'_CSS' => ['css/esenciales.css'],
	'_ACTIVE' => 'esenciales',
];

$Query = $Db->prepare("SELECT * from posts ORDER BY date DESC;");
$Query->execute();
$context['posts'] = $Query->fetchAll(PDO::FETCH_OBJ);

render('main', $context, function($context){
	extract($context);
	?>
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

	<section id="publicaciones">
		<div class="container">
			<h1>PUBLICACIONES<br>RECIENTES</h1>
			<div class="row">
			<?php foreach ($posts as $post):?>
				<div class="col-lg-4 col-md-6">
					<div class="card">
						<img class="card-img-top" src="<?=$post->img?>" alt="<?=htmlentities($post->author)?>">
						<div class="card-body">
							<h5 class="card-title"><?=htmlentities($post->title)?></h5>
							<p class="card-text"><?=htmlentities($post->abstract)?></p>
							<div class="small" style="float:left"><?=$post->date?></div>
							<div class="right"><a href="<?=$post->url?>" class="btn hot_pink ">Leer más...</a></div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
			</div>

</section>
<?php
});
?>