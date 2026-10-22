<?php

// Alexa değerlerini almak
// Alexa 2022'de kapandı, data.alexa.com artık yanıt vermiyor.
// Yerine ücretsiz NetAPI Top 1M sıralaması (API anahtarı gerekmez): https://netapi.com/top-1-mln-websites/

// site domain
$domain = 'girisimzel.com';
// get data
$data = json_decode(file_get_contents('https://netapi.com/api-json/?method=domain-rank&domain='.urlencode($domain)), true);
// global rank (0 = not in the top 1 million)
$globalRank = number_format( (int) $data['rank'] );
// rank inside the domain's TLD (.com, .tr ...)
$tld = $data['tld'];
$tldRank = number_format( (int) $data['rank_in_tld'] );
// global rank print
print $globalRank;
print '
';
// TLD rank print
print '.'.$tld.' '.$tldRank;
