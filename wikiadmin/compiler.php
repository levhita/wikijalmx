<?php
include('config.php');
foreach (glob("source/*.php") as $filename) {
	$path_parts = pathinfo($filename);
	echo "Processing $filename\n";
	echo `php $filename > $public_folder{$path_parts['filename']}.html`;
}
