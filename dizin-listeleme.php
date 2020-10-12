<?php

$a = opendir("dosyalar"); // klasör adresi
while ($o = readdir($a)) {
    if (!is_dir($o)){ //dosya değişkenindeki değer klasör değilse
        echo $o."<hr>"; // ekrana yazdırma
    }
}
