<?php

// Bir yazı içinde link varsa onu tıklanabilir hale getiriyor. Kullanışlı.

function otolink($text) {
    $pattern = '/(((http[s]?:\/\/(.+(:.+)?@)?)|(www\.))[a-z0-9](([-a-z0-9]+\.)*\.[a-z]{2,})?\/?[a-z0-9.,_\/~#&=:;%+!?-]+)/is';
    $text = preg_replace($pattern, ' $1', $text);
    // fix URLs without protocols
    $text = preg_replace('/href="www/', 'href="http://www', $text);
    return $text;
}
