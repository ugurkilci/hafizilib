<?php

$query = "SELECT distinct user_id FROM users";
$stmt = $db->prepare($query);
$stmt->execute();
$count = $stmt->rowCount();

/*
distinct in olayı zaten aynı olanlar hariç demek
rowCount ile de satırları listeleyince vola!
*/
