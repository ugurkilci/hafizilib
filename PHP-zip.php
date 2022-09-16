<?php

// Ziplemek
$zip = new ZIPArchive();
$zip->open("dosyaadi.zip", ZIPARCHIVE::CREATE);
$zip->addFile('a.txt', 'yeniadi.txt');
$zip->addFile('b.txt', 'yeniadib.txt');
$zip->close();
