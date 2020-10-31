<?php

// Güvenlik için önemli. Eposta gerçek mi değil mi kontrol eder.

$eposta = "ugurbocugu8@gmail.com";
if (filter_var($eposta, FILTER_VALIDATE_EMAIL)){ // :)

} else { // :(

}
