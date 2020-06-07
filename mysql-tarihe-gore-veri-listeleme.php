<?php

// Mysql Tarihe Göre Veri Listeleme

# Bugünün verileri
SELECT * FROM tabloAdi WHERE DAY(tarih) = DAY(CURDATE());

# Bu haftanın verileri
SELECT * FROM tabloAdi WHERE WEEK(tarih) = WEEK(CURDATE());

# Bu ayın verileri
SELECT * FROM tabloAdi WHERE MONTH(tarih) = MONTH(CURDATE());
