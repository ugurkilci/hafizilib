<?php

for ($i = 1; $i <= 50; $i++){
	if( $i % 10 == 0 ) { // i'nin 10'a bölümünden kalan 0 ise..
        echo  $i++ . '<br />'; 
    }
}

// Mysql'de katlı sayılar

// Klasik veri listeleme
$i = 1; // i sayısı 1 dedik. Yani sayı 1'den saymaya başlayacak.
$katsayi = 10; // Kat sayısını yazıyoruz. Her 10 veride 1. Veya her 5 veride 1 gibi.
foreach($query as $row) {

  $i++; // $i sayısını +1 ekle komutudur. Normalde $i = $i + 1; yazılabilir ama bu daha kısa bir yoldur.
  if( $i % $katsayi == 0 ) {
        // Reklam kodu
  }
}
