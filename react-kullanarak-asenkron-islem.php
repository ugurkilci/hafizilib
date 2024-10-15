<?php
// ÖNEMLİ NOT: sadece terminal veya cmd için sağlıklıdır, apache gibi web sunucularında tavsiye edilmez
// kullanmak için react/child-process kütüphanesini
// composer'dan kurmanız gerekir
include __DIR__ . "/vendor/autoload.php"; // composer autoload

$process = new React\ChildProcess\Process('ls'); // cmd veya sh komutu
$process->start();

$process->stdout->on('data', function ($chunk) {
    echo $chunk; // komuttan çıktıyı asenkron şekilde almak
});

$process->on('exit', function($exitCode, $termSignal) {
    echo 'İşlem şu kod ile çıkış yaptı: ' . $exitCode . PHP_EOL;
});
