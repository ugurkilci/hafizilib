<?php

// Hazır sitemap php şablonu

include 'ayar.php';
header("Content-Type: text/xml");
echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '
<urlset
  xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
  xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
  xsi:schemaLocation="
  http://www.sitemaps.org/schemas/sitemap/0.9
  http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
';
echo '
 <url>
       <loc>https://site.com/</loc>
       <lastmod>'.date("Y").'-'.date("m").'-'.date("d").'T'.date("H:i:s").'+00:00</lastmod>
       <changefreq>daily</changefreq>
       <priority>0.5000</priority>
 </url>
   <url>
       <loc>https://site.com/hakkimda</loc>
       <lastmod>'.date("Y").'-'.date("m").'-'.date("d").'T'.date("H:i:s").'+00:00</lastmod>
       <changefreq>daily</changefreq>
       <priority>0.8000</priority>
  </url>
  <url>
       <loc>https://site.com/iletisim</loc>
       <lastmod>'.date("Y").'-'.date("m").'-'.date("d").'T'.date("H:i:s").'+00:00</lastmod>
       <changefreq>daily</changefreq>
       <priority>0.8000</priority>
  </url>
';
$veri = $db->prepare("SELECT * FROM posts");
$veri->execute();
$islem = $veri->fetchALL(PDO::FETCH_ASSOC);

foreach($islem as $row){
    echo'
 <url>
    <loc>https://site.com/'.$yazicek["seo"]."-".$yazicek["yazi_id"].'</loc> 
    <lastmod>'.date("Y").'-'.date("m").'-'.date("d").'T'.date("H:i:s").'+00:00</lastmod>
    <changefreq>daily</changefreq>
    <priority>0.5000</priority>
 </url>
    ';
}

echo '</urlset>';
