<?php

// Bunu ayar/config/init.php gibi yerlere koyun.
$_SESSION["_token"] = md5(time());

function csrf()
{
    // Form içine yazın
    echo '<input type="hidden" name="_token" value="'.$_SESSION["_token"].'">';
}

function csrfControl()
{
    // Post içinde kullanınız. Bilhassa en tepesinde.
    if ($_POST["_token"] !== $_SESSION["_token"]) { die('CSRF Token!'); }
}
