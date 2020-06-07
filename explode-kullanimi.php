<?php

// Bir değişken içindeki verileri belirlenen belirtece göre ayırmayı sağlayan fonksiyondur

$degisken = 'php ile kodlama dünyasına hoşgeldiniz';
$bolunmus = explode(" ", $degisken);
// her boşluğu parçaya ayırdı.
$bolunmus[0] = php
$bolunmus[1] = ile
$bolunmus[2] = kodlama
$bolunmus[3] = dünyasına
$bolunmus[4] = hoşgeldiniz

$degisken = 'keyword1,keyword2,keyword3,keyword4';
$bolunmus = explode(",", $degisken);
// her virgülü parçaya ayırdı. her birine tek tek erişebilirsiniz. işte bu şekilde anahtar kelimeleri fgalan yaparsınız.
