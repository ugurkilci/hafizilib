<?php

error_reporting(0); // hataları kapat
include("dZip.inc.php"); // zip fontksiyon dosyası
$zip = new dZip('ugurkilci.zip'); // zip e isim ver
$zip->addFile('a.jpg','a.jpg'); // içine ekleyeceklerin. 2 defa yazılması gerekiyor.
$zip->addFile('b.jpg','b.jpg'); // içine ekleyeceklerin. 2 defa yazılması gerekiyor.
$zip->addFile('c.jpg','c.jpg'); // içine ekleyeceklerin. 2 defa yazılması gerekiyor.

$zip->save(); // zipleyip kaydettir.

// son
