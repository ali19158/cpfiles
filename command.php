<?php

$filename = 'somefile.txt';

$time = filemtime($filename);

if($time !== filemtime($filename)){
    $copy = file_get_contents(filename);
    $fp = fopen("$time.txt", "w");
	fwrite($fp, $filename);
	fclose($fp);
}
?>