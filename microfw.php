<?php
function render($layout, $context, $content_function) {
	ob_start();
	$content_function($context);
	$content = ob_get_clean();
	$context['_CONTENT'] = $content;
	include("layouts/$layout.php");
}

function css($csss){
	foreach ($csss AS $css) {
		echo '<link rel="stylesheet" href="css/'.$css.'">';
	}
}