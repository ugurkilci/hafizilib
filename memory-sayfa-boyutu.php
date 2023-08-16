<?php

function memoryStart() {
    global $start_time;
    global $start_memory;

    $start_time = microtime(true);
    $start_memory = memory_get_usage();
}

function memoryClose() {
    global $start_time;
    global $start_memory;

    // Sayfanın geri kalan kodu buraya gelecektir.

    $end_time = microtime(true);
    $end_memory = memory_get_usage();

    $elapsed_time = round($end_time - $start_time, 4);
    $memory_usage = round(($end_memory - $start_memory) / 1024, 2); // MB yerine KB olarak hesapla

    echo "<br>Geçen Süre: {$elapsed_time} saniye<br>";
    
    if ($memory_usage === 0) {
        echo "Kullanılan Bellek: 0 KB";
    } else {
        echo "Kullanılan Bellek: {$memory_usage} KB";
    }
}
