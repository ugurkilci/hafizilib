<?php
function insert_advertisement( $content ) {
    // Reklam kodunu buraya yapıştırın
    $advertisement = '<div class="advertisement">REKLAM İÇERİĞİ BURAYA GELECEK</div>';

    // Paragrafları bölmek için <p> etiketlerini kullanarak içeriği bölelim
    $paragraphs = explode( '</p>', $content );

    // Her 5. paragrafa reklamı ekleyelim
    $interval = 5;
    $count = count( $paragraphs );
    for ( $i = $interval; $i < $count; $i += $interval ) {
        $paragraphs[$i - 1] .= $advertisement;
    }

    // Paragrafları birleştirerek içeriği güncelleyelim
    $content = implode( '</p>', $paragraphs );

    return $content;
}
add_filter( 'the_content', 'insert_advertisement' );
