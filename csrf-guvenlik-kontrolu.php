<?php
// 24.07.2022 19:45
// Böyle kullanmak daha kolayıma geldi. :)

if($_POST){
  if ($_POST["_token"] !== $_SESSION["_token"]) { die('CSRF Token!'); }

  // Diğer POST kodları
}
$_SESSION["_token"] = md5(time().rand(0,999)); // Token

// =======================================================================

// Form içinde kullanılacak
<input type="hidden" name="_token" value="'.$_SESSION["_token"].'">
// Yada
<input type="hidden" name="_token" value="<?=$_SESSION["_token"]?>">
