<?php

$dataList = $db -> prepare("SELECT * FROM tablename");
$dataList -> execute();
$dataList = $dataList -> fetchALL(PDO::FETCH_ASSOC);

foreach($dataList as $row){
    echo $row["title"];
}
