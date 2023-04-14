<?php
function htmlTags($array = []){
        echo '
        <!-- 01001110 01100101 00100000 01001101 01110101 01110100 01101100 01110101 00100000 01010100 11111100 01110010 01101011 00100111 11111100 01101101 00100000 01000100 01101001 01111001 01100101 01101110 01100101 00100001 -->
        <!DOCTYPE html>
        <html lang="'.$array["language"].'">
        <head>
            <meta charset="UTF-8">
            <title>'.$array["title"].'</title>
            <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
            <meta name="description" content="'.$array["description"].'"/>
            <link rel="canonical" href="'.$array["link"].'" />
            <meta property="og:locale" content="'.$array["language"].'" />
            <meta property="og:type" content="website" />
            <meta property="og:title" content="'.$array["title"].'" />
            <meta property="og:description" content="'.$array["description"].'" />
            <meta property="og:url" content="'.$array["link"].'" />
            <meta property="og:site_name" content="'.$array["title"].'" />
            <meta property="og:image" content="'.$array["image"].'" />
            <meta property="og:image:secure_url" content="'.$array["image"].'" />
            <meta property="og:image:width" content="1600" />
            <meta property="og:image:height" content="900" />
            <meta name="twitter:card" content="summary_large_image" />
            <meta name="twitter:description" content="'.$array["description"].'" />
            <meta name="twitter:title" content="'.$array["title"].'" />
            <meta name="twitter:site" content="@'.$array["twitter"].'" />
            <meta name="twitter:image" content="'.$array["image"].'" />
            <meta name="twitter:creator" content="@'.$array["twitter"].'" />
            <meta name="MobileOptimized" content="510">
            <meta name="HandheldFriendly" content="true"/> 
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
        
            <link rel="stylesheet" href="css/all.css">
            <link rel="stylesheet" href="css/normalize.min.css">
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
            <link rel="stylesheet" href="css/bootstrap-grid.min.css">
            <link rel="stylesheet" href="css/style.css?v=<?=time()?>">
        
            <link rel="shortcut icon" type="image/ico" href="'.$array["favicon"].'"/>
        </head>
        <body>';
    }

    htmlTags([
        "title" => "Title",
        "description" => "Desc",
        "keywords" => "",
        "image" => "",
        "twitter" => "ugur2nd",
        "link" => "",
        "favicon" => "",
        "language" => "tr"
    ]);
