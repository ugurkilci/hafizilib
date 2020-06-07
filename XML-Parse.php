<?php

// XML kodlarını PHP'ye dönüştürmek

$xmlfile = "https://";
$xmlparser = xml_parser_create();

// open a file and read data
$fp = fopen($xmlfile, 'r');
$xmldata = fread($fp, 4096);

xml_parse_into_struct($xmlparser,$xmldata,$values);

xml_parser_free($xmlparser);
print_r($values);
$ornek = $values[21]["attributes"]["URL"];
