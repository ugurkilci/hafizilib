<?php

// Tarayıcıya bir şeyler kaydettirebiliyorsun. Kullanışlı ve manyak şeyler yapmaya müsait.

// cookie oluşturma
setcookie("çerezim", "selam dünya");

// cookie kullanımı
echo $_COOKIE['çerezim'];

// eğer tarayıcı kapanırsa bu çerezler silinir. silinmemesi için ise cookie 3.parametre
setcookie("çerezim", "selam dünya", time() + (60*60*24));

// cookie silme. 1 gün sonrasında bu çerez siteye girildiğinde gönderilmiyor olacak.
setcookie("çerezim", "selam dünya", time() - 3600);

// cookie var mı diye bakmak
echo isset($_COOKIE['olmayan']);
