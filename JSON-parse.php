<?php

$json = file_get_contents('https://');
$data = json_decode($json);
echo $data->title;
