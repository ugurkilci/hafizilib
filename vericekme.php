<?php

$data = $db -> prepare("SELECT * FROM tabloname WHERE
  id=?
");
$data -> execute([
  $
]);
$_data = $data -> fetch(PDO::FETCH_ASSOC);
