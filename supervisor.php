<?php
$seconds=2;
while(true)
{
	foreach (glob("source/*.php") as $filename) {
		$LastMod = filemtime($filename);
		clearstatcache();
		if ( time() < $LastMod+$seconds*2 ) {
			process($filename);
		} 
	}

	foreach (glob("layouts/*.php") as $filename) {
		$LastMod = filemtime($filename);
		clearstatcache();
		if ( time() < $LastMod+$seconds*2 ) {
			process_all();	
		} 
	}

	foreach (glob("views/*.php") as $filename) {
		$LastMod = filemtime($filename);
		clearstatcache();
		if ( time() < $LastMod+$seconds*2 ) {
			process_all();	
		} 
	}

	sleep($seconds);
}

function process($filename) {
	$path_parts = pathinfo($filename);
	echo "Processing $filename\n";
	echo `php $filename > public/{$path_parts['filename']}.html`;
}

function process_all() {
	foreach (glob("source/*.php") as $filename) {
		process($filename);
	}
}