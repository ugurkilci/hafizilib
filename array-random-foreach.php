<?php

$file = 'text.txt';
$contents = file_get_contents($file);

$names = explode(PHP_EOL, $contents);
shuffle($names);

foreach($names as $name) {
    echo ''.$name.'';
    echo "\n";
}
