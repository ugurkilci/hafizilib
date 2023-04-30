<?php

$sql = "SELECT name 
FROM birincitablo 
WHERE user_id = 2 
UNION 
SELECT isim 
FROM ikincitablo 
WHERE uye_id = 2";

$stmt = $db->prepare($sql);
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  echo "İsim: " . $row['isim'] . "<br/>";
}
