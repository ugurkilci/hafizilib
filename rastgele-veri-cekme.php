<?php

// Veri tabanından rastgele veri çeker

$rastgele = $db->prepare("SELECT * FROM tablo ORDER BY RAND() DESC");
$rastgele->execute();
$_rastgele = $rastgele->fetch(PDO::FETCH_ASSOC);

echo $_rastgele["text"];
