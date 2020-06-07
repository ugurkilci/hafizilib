<?php

// Başka siteden veri çekmeye yarıyor. Yani klasik Curl

function resimlink($a){
    $ch         = curl_init();
    $header     = array();
    $header[]   = "Accept-Language: tr-tr,en;q=0.5"; 

    curl_setopt_array($ch, [
        CURLOPT_URL             => $a,
        CURLOPT_USERAGENT       => "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36",
        CURLOPT_RETURNTRANSFER  => true,
        CURLOPT_SSL_VERIFYPEER  => false,
        CURLOPT_SSL_VERIFYHOST  => false,
        CURLOPT_FOLLOWLOCATION  => true,
        CURLOPT_HTTPHEADER   => $header,
        CURLOPT_AUTOREFERER     => true
    ]);

    $source = curl_exec($ch);
    curl_close($ch);
    preg_match('//', $source, $yazdir);

    return $yazdir[0];
}
