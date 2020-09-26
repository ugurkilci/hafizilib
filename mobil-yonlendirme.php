<?php

// Siteye girenler mobilden girdiyse başka şeyler gösterebilirsin. :)
$hua=$_SERVER['HTTP_USER_AGENT'];
$iphone = strpos($hua,"iPhone");
$android = strpos($hua,"Android");
$webos = strpos($hua,"webOS");
$ipod = strpos($hua,"iPod");
if ($iphone || $android || $webos || $ipod || $bberry)
{
echo "blabla";
}


// Sıkıştırılmış
$hua=$_SERVER['HTTP_USER_AGENT'];$iphone=strpos($hua,"iPhone");$android=strpos($hua,"Android");$webos=strpos($hua,"webOS");$ipod=strpos($hua,"iPod");if($iphone||$android||$webos||$ipod||$bberry){echo"blabla";}
