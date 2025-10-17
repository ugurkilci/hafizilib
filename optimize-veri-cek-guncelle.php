<?php
// Veritabanı bağlantısı
include 'db.php';

// ÖNCE: Veri çekip güncelleme (2 sorgu)
$data = $db->prepare("SELECT * FROM tabloadi WHERE id = ?");
$data->execute([2]);
$_data = $data->fetch(PDO::FETCH_ASSOC);
$count = $_data["count"] + rand(10, 100);

$update = $db->prepare("UPDATE tabloadi SET count = ? WHERE id = ?");
$update->execute([$count, 2]);

// Daha optimize etmek için:
// SONRA: Tek sorguda güncelleme (1 sorgu)
$update = $db->prepare("UPDATE tabloadi SET count = count + FLOOR(10 + RAND() * 91) WHERE id = ?");
$update->execute([2]);
