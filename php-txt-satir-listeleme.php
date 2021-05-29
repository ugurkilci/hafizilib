<?php
$file = '12.txt';
$contents = file_get_contents($file);

$names = explode(PHP_EOL, $contents);
foreach($names as $name) {
    echo ''.$name.'';
    echo "\n";
}
