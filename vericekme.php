<?php

$data = $db->prepare("SELECT * FROM tabloadi WHERE id=?");
$data ->execute([

]);
$_data = $data->fetch(PDO::FETCH_ASSOC);
