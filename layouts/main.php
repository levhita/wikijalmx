<?php extract($context) ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/main.css">
	<title><?=$_TITLE?></title>
	<?=css($_CSS)?>
</head>

<body>
	<header class="container">
		<ul>
			<li><a href="index.html#inicio">Inicio</a></li>
			<li><a href="index.html#nosotras">Nosotras</a></li>
			<li><a href="index.html#esenciales">Esenciales</a></li>
			<li><a href="index.html#proyectos">Proyectos</a></li>
			<li><a href="index.html#estructura">Estructura</a></li>
			<li><a href="index.html#contacto">Contacto</a></li>
		</ul>
		
	</header>

	<?=$_CONTENT?>
		
	<footer class="container">
		<div class="row">
			<div class="col">
				© 2018 Secretaría Técnica<br/>
				Equipo Ejecutivo de Wikipolítica Jalisco
			</div>
			<div class="col">
				Siguenos en nuestras redes sociales:

			</div>
		</div>
	</footer>
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>