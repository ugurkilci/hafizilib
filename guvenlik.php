<?php

// Güvenlik sistemleri

// Slash/Taksim/Bölü yani "/" işaretleri silen bir fonksiyondur. Sitede Javascript kodlarını çalıştırmamayı sağlarsınız. Güzel olur.
stripslashes();

// Özel karakterleri HTML öğeleri haline getirir. 
htmlspecialchars();

// Çift tırnakların önüne ters slash \ konularak çıkan kodu pasifleştirir.
addslashes();
