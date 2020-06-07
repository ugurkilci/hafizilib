<?php

// 30 karakterde bir satır aşağıya inme kodu

$text = "PHP Betik dilinde her 30 karakterde bir alt satıra geçirmemiz gerekiyormuş. Bu işin adı wordwraptır";
$newtext = wordwrap($text, 30, "
\n");

echo $newtext;
