<?php
include("microfw.php");

$context = [
	'_TITLE' =>'Nosotras | Wikipolítica Jalisco',
	'_CSS' => ['css/historia.css'],
	'_JS' => [],
	'_ACTIVE' => 'historia',
];

render('main', $context, function($context){
	extract($context);
	?>
	
	<section id="historia">
		<div class="container">
			<h1>HISTORIA</h1>
			<p>Wikipolítica nace como organización en verano de 2014. Sus inicios se remontan a la efervescencia política vivida durante el 2012 y los primeros intentos que le siguieron para articular el descontento hacia una nueva política que nos hiciera sentido. A continuación presentamos una línea del tiempo sobre Wikipolítica Jalisco y sus antecedentes.</p>
		</div>
		<div class="container-fluid">
			<div id="historyCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
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