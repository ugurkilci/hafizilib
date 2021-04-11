<?php

$q = @$_GET["q"]; // URLden q verisini çek || aranan kelime

// Arama yapmak için içerikler tablosundan aranan kelimenin geçtiği içerik başlık, içerik açıklama yada içerik linkte varsa onları listele
    $cek = $db->query("SELECT * FROM icerikler where icerik_baslik COLLATE UTF8_GENERAL_CI like '%$q%' or icerik_aciklama COLLATE UTF8_GENERAL_CI like '%$q%' or icerik_link COLLATE UTF8_GENERAL_CI like '%$q%'",PDO::FETCH_ASSOC);

// kelime yazıldıysa
if ($q) {
    // veriyi listele
    foreach($cek as $row){
        echo $row["icerik_baslik"]; 
    }
}
