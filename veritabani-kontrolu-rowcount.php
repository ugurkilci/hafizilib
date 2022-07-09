<?php

// Bir veri veritabanında var mı kontrol etmek

$selectRow = $db -> prepare("SELECT * FROM mail WHERE
 user_email =:user_email
");
$selectRow -> execute([
 'user_email'=>$email
]);
$selectRow = $selectRow -> rowCount();
 
if($selectRow > 0){ // Var

}else{ // Yok

}
