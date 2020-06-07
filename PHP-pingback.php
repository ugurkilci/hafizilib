<?php

// Her sayfaya girildiğinde Google'ye ping gönderme kodu

// Kullanımı: <link rel="pingback" href="https://www.girisimzel.com/pingback.php" />

function pingGoogleSitemaps( $url_xml ) 
{ 
   $status = 0; 
   $google = 'www.google.com'; 
   if( $fp=@fsockopen($google, 80) ) 
   { 
      $req =  'GET /webmasters/sitemaps/ping?sitemap=' . 
              urlencode( $url_xml ) . " HTTP/1.1\r\n" . 
              "Host: $google\r\n" . 
              "User-Agent: Mozilla/5.0 (compatible; " . 
              PHP_OS . ") PHP/" . PHP_VERSION . "\r\n" . 
              "Connection: Close\r\n\r\n"; 
      fwrite( $fp, $req ); 
      while( !feof($fp) ) 
      { 
         if( @preg_match('~^HTTP/\d\.\d (\d+)~i', fgets($fp, 128), $m) ) 
         { 
            $status = intval( $m[1] ); 
            break; 
         } 
      } 
      fclose( $fp ); 
   } 
   return( $status ); 
} 

// Once the sitemaps are ready, we ping Google... 
if( 200 === ($status=pingGoogleSitemaps('https://toosba.com/sitemap.xml')) ) 
   echo "
 pingleme tamam"; 
else 
   echo "error: pingleme tamam değil";  
