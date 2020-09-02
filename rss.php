<?php

include 'ayar.php';

function lambda($a){
    $a = str_replace("&", "&amp;", $a);
    return $a;
}

header("Content-Type: text/xml");

echo '<?xml version="1.0" encoding="utf-8"?>
<rss version="2.0">
<channel>
<title>Girişimzel RSS</title>
<description></description>
<link>https://www.girisimzel.com</link>
<language>tr-TR</language>
';

$veri = $db->prepare("SELECT * FROM icerikler ORDER BY icerik_id DESC");
$veri->execute();
$islem = $veri->fetchALL(PDO::FETCH_ASSOC);

foreach ($islem as $row) {
        echo '
        <item>
        <title>'.lambda($row["icerik_baslik"]).'</title>
        <description>
        <![CDATA[<img src="'.$row["icerik_resim"].'"><br>
        '.lambda($row["icerik_aciklama"]).'
        ]]>
        </description>
        <link>'.$row["icerik_link"].'</link>
        <image>'.$row["icerik_resim"].'</image>
        <pubDate>'.$row["icerik_tarih"].'</pubDate>
        </item>
        ';
}
echo '</channel>
</rss> ';
