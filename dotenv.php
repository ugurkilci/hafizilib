<?php
// composer require symfony/dotenv

// .env dosyası okuma
$env = new Symfony\Component\Dotenv\Dotenv();
$env->load( __DIR__ . "/.env" ); // dosya yolu

echo $_ENV["foo"];

// çoklu env kodu
// bu kod .env dosyanızda bulunan tüm verileri
// kendi ismiyle define eder.

$defines = [
    "test",
    "deneme"
];

foreach($defines as $d) {
    if(isset($_ENV[$d])) @define($d, $_ENV[$d]);
}

echo test;
echo deneme;
