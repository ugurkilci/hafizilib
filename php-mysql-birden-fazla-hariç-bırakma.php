<?php
// kodumuz where id not in ('', '', '', '', '')
// idsi 1, 25, 62, 99 olan verileri çekme dedik. listeden çıkart dedik.

$veri = $db->prepare("SELECT * FROM veriler WHERE veriid NOT IN (1, 25, 62, 99)");
$veri->execute();
$islem = $veri->fetchALL(PDO::FETCH_ASSOC);

foreach($islem as $row){
    echo $row;
}
