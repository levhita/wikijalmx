<?php
function render($layout, $context, $content_function) {
	global $base_dir;
	if(!isset($base_dir)){$base_dir='./';}
	ob_start();
	$content_function($context);
	$content = ob_get_clean();
	$context['_CONTENT'] = $content;
	include($base_dir . "layouts/$layout.php");
}

function css($csss){
	foreach ($csss AS $css) {
		echo '<link rel="stylesheet" href="'.$css.'">';
	}
}