<?php

// 1 yıl sonrası
$simdiki_tarih = date("Ymd");
$yeni_tarih = date("Y.m.d", strtotime($simdiki_tarih . '+1 year')); 

echo $yeni_tarih;


// Şimdi de 1 yıl Öncesini bulalım

$simdiki_tarih = date("Ymd");
$yeni_tarih = date("Y.m.d", strtotime($simdiki_tarih . '-1 years')); 

echo $yeni_tarih;
