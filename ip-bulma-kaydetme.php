<?php

$ipAdresi = $_SERVER["REMOTE_ADDR"] . PHP_EOL;

file_put_contents("ip-adres.txt", $ipAdresi, FILE_APPEND);

?>
