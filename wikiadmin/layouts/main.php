<?php extract($context) ?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/main.css">
	<title><?=$_TITLE?></title>
	<?=css($_CSS)?>
	<link rel="icon" href="images/favicon.png">
	<link rel="apple-touch-icon-precomposed" href="images/favicon_apple.png">
</head>

<body>
	
	<nav class="navbar navbar-expand-lg navbar-dark">
		<a class="navbar-brand" href="index.html"><img src="images/wikipolitica_logo.png"></a>
		
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto"></ul>
			<ul class="navbar-nav ml-auto my-2 my-lg-0">
				<li class="nav-item <?=($_ACTIVE=='inicio')?'active':''?>">
					<a class="nav-link" href="index.html">Inicio</a>
				</li>
				
				<li class="nav-item <?=($_ACTIVE=='nosotras')?'active':''?>">
					<a class="nav-link" href="nosotras.html">Nosotras</a>
				</li>
				
				<!--<li class="nav-item <?=($_ACTIVE=='esenciales')?'active':''?>">
					<a class="nav-link" href="esenciales.html">Esenciales</a>
				</li>-->
				
				<li class="nav-item <?=($_ACTIVE=='estructura')?'active':''?>">
					<a class="nav-link" href="estructura.html">Estructura</a>
				</li>
				
				<li class="nav-item <?=($_ACTIVE=='proyectos')?'active':''?>">
					<a class="nav-link" href="proyectos.html">Proyectos</a>
				</li>
				
				<li class="nav-item <?=($_ACTIVE=='publicaciones')?'active':''?>">
					<a class="nav-link" href="publicaciones.html">Publicaciones</a>
				</li>
				<li class="nav-item <?=($_ACTIVE=='contacto')?'active':''?>">
					<a class="nav-link" href="contacto.html">Contacto</a>
				</li>
				
			</ul>
		</div>
	</nav>

	<?=$_CONTENT?>
	<div id="footer_container">
		<footer class="container">
			<div class="row">
				<div class="col">
					© 2018 Secretaría Técnica<br/>
					Equipo Ejecutivo de Wikipolítica Jalisco
				</div>
				<div class="col">
					Síguenos en nuestras redes sociales:<br>
					<a href="https://www.facebook.com/WikipoliticaJalisco/" title="WikipoliticaJalisco"><img src="images/icons/facebook.png" alt="facebook"></a>
					<a href="https://twitter.com/WikipoliticaJal" title="@WikipoliticaJal"><img src="images/icons/twitter.png" alt="twitter"></a>
					<a href="https://www.instagram.com/wikipoliticajalisco/" title="@WikipoliticaJalisco"><img src="images/icons/instagram.png" alt="instagram"></a>
				</div>
			</div>
		</footer>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<?=js($_JS)?>

</body>
</html>