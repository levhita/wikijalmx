<?php
foreach (glob("source/*.php") as $filename) {
	$path_parts = pathinfo($filename);
	echo "Processing $filename\n";
	echo `php $filename > public/{$path_parts['filename']}.html`;
}
