<?php

// Tamponlamayı devre dışı bırak
while (ob_get_level()) {
    ob_end_flush();
}
ob_implicit_flush(true);

echo 1;

// Flush işlemi
flush();
sleep(5);

echo 2;
flush();
