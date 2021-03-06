<?php
include_once("microfw.php");

$context = [
	'_TITLE' =>'Contacto | Wikipolítica Jalisco',
	'_CSS' => ['https://cdn-images.mailchimp.com/embedcode/classic-10_7.css','css/contacto.css'],
	'_JS' => [],
	'_ACTIVE' => 'contacto',
];

render('main', $context, function($context){
	extract($context);
	?>
	<section id="contacto">
		<div class="container">
			<h1>CONTACTO</h1>
			<h3>¡Suscríbete a nuestro Boletín!</h3>

			<div class="row">
				<div id="mc_embed_signup" class="col-lg-7">
					<!-- Begin MailChimp Signup Form -->
					<form action="https://wikijal.us17.list-manage.com/subscribe/post?u=7b4730781d5dffa0dcb5beaa1&amp;id=8509c83eea" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>


						<div class="indicates-required"><span class="asterisk">*</span>  requeridos.</div>
						<div class="mc-field-group">
							<label for="mce-EMAIL">Correo Électronico <span class="asterisk">*</span>
							</label>
							<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
						</div>
						<div class="mc-field-group">
							<label for="mce-FNAME">Nombre(s) <span class="asterisk">*</span>
							</label>
							<input type="text" value="" name="FNAME" class="required" id="mce-FNAME">
						</div>
						<div class="mc-field-group">
							<label for="mce-LNAME">Apellidos <span class="asterisk">*</span>
							</label>
							<input type="text" value="" name="LNAME" class="required" id="mce-LNAME">
						</div>
						<div class="mc-field-group size1of2">
							<label for="mce-BIRTHDAY-month">Cumpleaños</label>
							<div class="datefield">
								<span class="subfield dayfield"><input class="birthday " type="text" pattern="[0-9]*" value="" placeholder="D" size="2" maxlength="2" name="BIRTHDAY[day]" id="mce-BIRTHDAY-day"></span> 
								<span class="small-meta nowrap"></span> /
								<span class="subfield monthfield"><input class="birthday " type="text" pattern="[0-9]*" value="" placeholder="M" size="2" maxlength="2" name="BIRTHDAY[month]" id="mce-BIRTHDAY-month"> ( dd / mm )</span> 

							</div>
						</div><div class="mc-field-group size1of2">
							<label for="mce-MMERGE5">Teléfono </label>
							<input type="text" name="MMERGE5" class="" value="" id="mce-MMERGE5">
						</div>
						<div id="mce-responses" class="clear">
							<div class="response" id="mce-error-response" style="display:none"></div>
							<div class="response" id="mce-success-response" style="display:none"></div>
						</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
						<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_7b4730781d5dffa0dcb5beaa1_8509c83eea" tabindex="-1" value=""></div>

						<div class="right" style="padding-right:23px">
							<input type="submit" value="Suscribirme" name="subscribe" id="mc-embedded-subscribe" class="btn pink">
						</div>


					</form>


				</div>

				<div class="col-lg-5 address">
					<p class="center"><img src="images/icons/megaphone.png" alt="address"/></p>
					<div  class="center"><strong>Queremos escuchar te ti</strong></div>
					<h3  class="center">¡Nos necesitamos!</h3>

					<!-- <address>
						Privada Andrés Terán 33<br>
						Ladrón de Guevara, Americana, 44600​<br>
						Guadalajara, Jalisco, México.
					</address>-->

					<p>Síguenos en redes sociales:</p>

					<p style="padding-left: 1em;">
						<a href="https://www.facebook.com/WikipoliticaJalisco/"><img src="images/icons/facebook.png"> WikipoliticaJalisco</a><br>
						<a href="https://twitter.com/WikipoliticaJal"><img src="images/icons/twitter.png"> @WikipoliticaJal</a><br>
						<a href="https://www.instagram.com/wikipoliticajalisco/"><img src="images/icons/instagram.png"> @WikipoliticaJalisco</a><br>
					</p>

					<p class="center">¡Únete al <strong><a href="https://www.facebook.com/groups/ComunidadWikipoliticaJal/">Grupo de Facebook</a></strong>!</p>

					<p>
						Email: <a href="mailto:comunidad@wikijal.mx">comunidad@wikijal.mx</a><br>
						<!--Tel: <a href="tel:(33) 16901383">(33) 1690-1383</a>-->
					</p>



				</div>
			</div>
		</div>
	</section>

	<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='BIRTHDAY';ftypes[3]='birthday';fnames[4]='MMERGE5';ftypes[4]='phone'; /*
	 * Translated default messages for the $ validation plugin.
	 * Locale: ES
	 */
	 $.extend($.validator.messages, {
	 	required: "Este campo es obligatorio.",
	 	remote: "Por favor, rellena este campo.",
	 	email: "Por favor, escribe una dirección de correo válida",
	 	url: "Por favor, escribe una URL válida.",
	 	date: "Por favor, escribe una fecha válida.",
	 	dateISO: "Por favor, escribe una fecha (ISO) válida.",
	 	number: "Por favor, escribe un número entero válido.",
	 	digits: "Por favor, escribe sólo dígitos.",
	 	creditcard: "Por favor, escribe un número de tarjeta válido.",
	 	equalTo: "Por favor, escribe el mismo valor de nuevo.",
	 	accept: "Por favor, escribe un valor con una extensión aceptada.",
	 	maxlength: $.validator.format("Por favor, no escribas más de {0} caracteres."),
	 	minlength: $.validator.format("Por favor, no escribas menos de {0} caracteres."),
	 	rangelength: $.validator.format("Por favor, escribe un valor entre {0} y {1} caracteres."),
	 	range: $.validator.format("Por favor, escribe un valor entre {0} y {1}."),
	 	max: $.validator.format("Por favor, escribe un valor menor o igual a {0}."),
	 	min: $.validator.format("Por favor, escribe un valor mayor o igual a {0}.")
	 });}(jQuery));var $mcj = jQuery.noConflict(true);</script>

	<?php
});
?>