<?php

include 'ayar.php';

$dataList = $db -> prepare("SELECT * FROM uyeler WHERE DAY(uye_tarih) != DAY(CURDATE())"); // Bugün üye olanlar hariç
$dataList -> execute();
$dataList = $dataList -> fetchALL(PDO::FETCH_ASSOC);

foreach($dataList as $row){
    $day = date('d', strtotime($row["uye_tarih"]));

    if (
        $day == date("d")
    ) {
        echo $row["uye_tarih"];
        echo "<hr>";
    }
}
