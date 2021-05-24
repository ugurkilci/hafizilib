<?php

// Bir yazı içinde link varsa onu tıklanabilir hale getiriyor. Kullanışlı.

function otolink($data) {
    $array  = array(
        "target"=>"_blank",
        "rel"=>"nofollow noopener noreferrer",
        "class"=>"text-white"
    );
    $add    = "";
    $data   = ' ' . $data;
    foreach ($array as $row => $value) {
        $add .= " {$row}=\"{$value}\"";
    }
    $data = preg_replace(
    '`([^"=\'>])((http|https|ftp)://[^\s<]+[^\s<\.)])`i',
    '$1<a href="$2"'.$add.'>$2</a>',
    $data
    );
    $data = substr($data, 1);

    return $data;
}

echo otolink('test 123 http://ugurkilci.com global cap cup');
