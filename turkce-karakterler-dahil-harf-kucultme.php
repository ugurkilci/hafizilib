<?php

// Harf küçültme. MeRhAba yerine merhaba

echo strtolower("İ"); # ekran görüntüsü: Ä°
echo mb_strtolower("İ", 'utf8'); # ekran görüntüsü: i
