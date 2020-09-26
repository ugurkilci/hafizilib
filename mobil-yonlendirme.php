<?php

// Siteye girenler mobilden girdiyse başka şeyler gösterebilirsin. :)

$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$webos = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
$bberry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
if ($iphone || $android || $webos || $ipod || $bberry)
{
echo "blabla";
}
