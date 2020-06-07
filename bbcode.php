<?php

// BBCode yapımı

$sehir = "Merhaba Dünya! :)";
echo str_replace(":)","<img src='img/gulucuk.jpg' / >",$sehir);
//str_replace ile :) yerine resim dosyasını ekleyecek ve bizde gülücüğü görsel olarak görebileceğiz. :)
