<?php
if ($_POST) {
  if(isset($_FILES['dosya'])){
    $klasor="depo";
    $dosya_sayi=count($_FILES['dosya']['name']); 
      for($i=0;$i<$dosya_sayi;$i++){ 
        if(!empty($_FILES['dosya']['name'][$i])){ 
         move_uploaded_file($_FILES['dosya']['tmp_name'][$i],$klasor."/".$_FILES['dosya']['name'][$i]); // Temel işlem normalin aksine sonuna [$i] eklememiz. Bir dizi olduğu için tek tek ele almak gerek. Bu şekilde tek tek ele alıyoruz. Zaten for döngüsünde.
        } 
      }
  }
}
?>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="dosya[]" id="dosya[]" multiple="multiple"> <!-- Burada 2 şey yapıyoruz. İsme [] ekliyoruz. Bu şekilde array yani dizi haline geliyor. Ve multiple diyerek çoklu işlem yaptığımızı belirtiyoruz. -->
    <input type="submit" value="Başla">
</form>
