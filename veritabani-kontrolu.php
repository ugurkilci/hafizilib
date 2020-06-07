<?php

// Bir veri veritabanında var mı kontrol etmek

$cek = $db->prepare("SELECT * FROM mail WHERE mail =:mail ");
$cek->execute([
'mail'=>$mail
]);
$saydirma = $cek->rowCount();
 
if($saydirma >0){ // Var

}else{ // Yok

}
