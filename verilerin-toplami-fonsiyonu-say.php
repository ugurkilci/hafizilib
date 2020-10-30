<?php

// Veritabanındaki verilerin toplamını gösteren fonksiyon

function say($a){
 global $db;
 $sorgu = $db->prepare("SELECT COUNT(*) FROM icerik WHERE kate=?");
 $sorgu->execute([
  
 ]);
 $say = $sorgu->fetchColumn();

 return $say;
}
