<?php
// Ayar.php'nin en altında kullanılacak
// Token
if ($_SESSION) {
  if (!isset($_POST["_token"])) {
    $_SESSION["_token"] = md5(time().rand(0,99999999));
  }
}

// POST içinde kullanılacak
// CSRF Kontrolü - Forma token eklemeyi unutma!
if (!isset($_POST["_token"])) { die('Token bulunamadı!'); }
if ($_POST["_token"] !== $_SESSION["_token"]) { die('Hak yeme hack yeme!'); }

// Form içinde kullanılacak
<input type="hidden" name="_token" value="'.$_SESSION["_token"].'">
// Yada
<input type="hidden" name="_token" value="<?=$_SESSION["_token"]?>">
