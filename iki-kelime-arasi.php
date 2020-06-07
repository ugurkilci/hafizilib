<?php

// İki kelime arasındaki kelimeyi alma fonksiyonu.
// Örneğin "Ali Ata Bak" cümlesindeki "Ata"yı almaya yarar.
// BBCode yaparken çok işe yarıyor

function get_string_between($string, $start, $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}

$metin = "Kedim [kedi]duman[/kedi]ı seviyorum";
$ayir = get_string_between($metin, '[kedi]', '[/kedi]');
echo $ayir;
