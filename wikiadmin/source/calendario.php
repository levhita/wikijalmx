<?php
include_once("microfw.php");

$context = [
	'_TITLE' =>'Calendario | Wikipolítica Jalisco',
	'_CSS' => ['css/calendario.css'],
	'_JS' => [],
	'_ACTIVE' => 'calendario',
];

render('main', $context, function($context){
	extract($context);
	?>
	
	<section  id="inicio">
		<div class="container">
			<h1>CALENDARIO</h1>
			<h2>Asiste a los eventos que organiza WikiPolítica en Jalisco, conferencias, conversatorios, encuentros, asambleas.</h2>
		</div>
	</section>
	
	<section class="container" id="calendar">
		<iframe src="https://calendar.google.com/calendar/b/4/embed?height=800&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=wikijal.mx_am6qff31l8ang5cvvl96f3j29c%40group.calendar.google.com&amp;color=%23FF3378&amp;ctz=America%2FMexico_City" style="border-width:0"  frameborder="0" scrolling="no"></iframe>			
	</section>
	<?php
});
?>