<?php

$veri = $db->prepare("SELECT * FROM mesajlar");
$veri->execute();
$islem = $veri->fetchALL(PDO::FETCH_ASSOC);

foreach($islem as $row){
    echo $row["title"];
}
