<?php

// Alexa değerlerini almak

// site url
$url = 'https://www.girisimzel.com';
// get data
$alexa = simplexml_load_file('http://data.alexa.com/data?cli=10&url='.$url);
// global rank
$globalRank = number_format( (int) $alexa->SD->POPULARITY['TEXT'] );
// country rank
$countryCode = $alexa->SD->COUNTRY['CODE'];
$countryName = $alexa->SD->COUNTRY['NAME'];
$countryRank = number_format( (int) $alexa->SD->COUNTRY['RANK'] );
// global rank print
print $globalRank;
print '
';
// country rank print
print $countryName.' '.$countryRank;
