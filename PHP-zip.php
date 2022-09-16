<?php

// Ziplemek
$zip = new ZIPArchive();
$zip->open("dosyaadi.zip", ZIPARCHIVE::CREATE);
$zip->addFile('a.txt', 'yeniadi.txt');
$zip->addFile('b.txt', 'yeniadib.txt');
$zip->close();

// // Şifreli Zip Yapmak
// $zip = new ZIPArchive();
// $zip->open("dosyaadi.zip", ZIPARCHIVE::CREATE);
// $zip->addFile('a.txt', 'yeniadi.txt');
// $zip->setEncryptionName('dosyaadi.zip', ZipArchive::EM_AES_256, 'şifre');
// $zip->close();

// // Zipten dışarı çıkarmak
// $zip = new ZIPArchive();
// $zip->open("dosyaadi.zip");
// $zip->setPassword('şifre');
// $zip->extractTo('çıkarılacak klasör');
// $zip->close();
