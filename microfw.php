<?php
function render($layout, $context, $content_function) {
	ob_start();
	$content_function($context);
	$content = ob_get_clean();
	$context['_CONTENT'] = $content;
	include("layouts/$layout.php");
}