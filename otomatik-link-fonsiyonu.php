<?php

// Bir yazı içinde link varsa onu tıklanabilir hale getiriyor. Kullanışlı.

function otolink($veri, $ozellikler=array()) {
    $ekOzellik  = "";
    $veri       = ' ' . $veri;
    foreach ($ozellikler as $ozellik => $deger) {
  $ekOzellik .= " {$ozellik}=\"{$deger}\"";
    }
    $veri = preg_replace(
       '`([^"=\'>])((http|https|ftp)://[^\s<]+[^\s<\.)])`i',
       '$1<a href="$2"'.$ekOzellik.'>$2</a>',
       $veri
    );
    $veri = substr($veri, 1);
    return $veri;
 }

 $str = 'test 123 http://ugurkilci.com global cap cup';
 echo otolink($str, array("target"=>"_blank","rel"=>"nofollow noopener noreferrer"));
