<?php

// Veritabanındaki verilerin toplamını gösteren fonksiyon

function sayy($a){
 include 'ayar.php'; // ayar dosyası
 $sorgu = $db->prepare("SELECT COUNT(*) FROM icerik WHERE kate=?");
 $sorgu->execute(array($a));
 $say = $sorgu->fetchColumn();

 echo $say;
}