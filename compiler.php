<?php
$seconds=2;
while(true)
{
	foreach (glob("source/*.php") as $filename) {
		$LastMod = filemtime($filename);
		clearstatcache();
		$path_parts = pathinfo($filename);
		if ( time() < $LastMod+$seconds*2 ) {
			echo "Processing $filename\n";
			echo `php $filename > public/{$path_parts['filename']}.html`;
		} 
	}
	sleep($seconds);
}