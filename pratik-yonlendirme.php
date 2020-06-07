<?php

// PHP Pratik Yönlendirme Kodu

function go ($url, $time = 0){
    if ($time) header("Refresh: {$time}; url={$url}");
    else header("Location: {$url}");
 }

 // Kullanımı
 go("siteadi.com", 10);

 // Ya da
 go("siteadi.com");
