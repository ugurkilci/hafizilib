<?php

$hua      = $_SERVER['HTTP_USER_AGENT'];
$iphone   = strpos($hua,"iPhone");
$android  = strpos($hua,"Android");
$webos    = strpos($hua,"webOS");
$ipod     = strpos($hua,"iPod");
if ($iphone || $android || $webos || $ipod){
  
}
