<?php

// Veri tabanı bağlantısı

$host 		= "localhost";
$dbname 	= "";
$charset 	= "utf8";
$root 		= "";
$password 	= "";

try{
  $db = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset;", $root, $password);
}catch(PDOExeption $error){
  echo $error->getMessage();
}
