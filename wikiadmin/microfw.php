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
	if (isset($csss) && is_array($csss)) {
		foreach ($csss AS $css) {
			echo '<link rel="stylesheet" href="'.$css.'">';
		}
	}
}

function js($jss){
	if (isset($jss) && is_array($jss)) {
		foreach ($jss AS $js) {
			echo '<script type="application/javascript" src="'.$js.'"></script>';
		}
	}
}