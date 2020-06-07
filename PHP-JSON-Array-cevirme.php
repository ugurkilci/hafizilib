<?php

// JSON kodlarını Array'a çevirme

$l = "https://www.instagram.com/ugur2nd/?__a=1";
function l($a){
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

    return $source;
}
$l = l($l);
// Convert JSON string to Array
$someArray = json_decode($l, true);
print_r($someArray);        // Dump all data of the Array
echo $someArray[0]["name"]; // Access Array data

// Convert JSON string to Object
$someObject = json_decode($l);
print_r($someObject);      // Dump all data of the Object
echo $someObject[0]->name; // Access Object data
