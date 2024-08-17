<?php
include __DIR__ . "/vendor/autoload.php"; // composer autoload

$process = new React\ChildProcess\Process('ls'); // cmd veya sh komutu
$process->start();

$process->stdout->on('data', function ($chunk) {
    echo $chunk; // komuttan çıktıyı asenkron şekilde almak
});

$process->on('exit', function($exitCode, $termSignal) {
    echo 'İşlem şu kod ile çıkış yaptı: ' . $exitCode . PHP_EOL;
});
