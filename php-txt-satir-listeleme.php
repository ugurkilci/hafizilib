<?php
    $file = 'safaribuster.txt';
    $contents = file_get_contents($file);

    $i = 1;
    $names = explode(PHP_EOL, $contents);
    foreach($names as $name) {
        echo '$sb'.$i++;
        echo $name;
        echo "<br>";
    }
?>
