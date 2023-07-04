<?php
// composer require symfony/dotenv

// .env dosyası okuma
$env = new Symfony\Component\Dotenv\Dotenv();
$env->load( __DIR__ . "/.env" ); // dosya yolu

echo $_ENV["foo"];
