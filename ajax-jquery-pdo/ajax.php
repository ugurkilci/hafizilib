<?php 
    // Uğur KILCI, ugurkilci.com
    sleep(1);
    require("ayar.php"); // Veri tabanı bağlantısı

 	if(!empty($_POST["id"])){
        $id = $_POST["id"]; // Tipi posttu ve bizde son id postunu alıyoruz.
        
        $query = $db->query("SELECT count(*) as say FROM icerikler WHERE icerik_id < ".$id." ORDER BY icerik_id DESC"); 
        $row = $query->fetch();

        $toplam = $row["say"]; // Toplam içerik sayısı
        $limit = 10; // Kaç tane listelensin?

        $query = $db->query("SELECT * FROM icerikler WHERE icerik_id < ".$id." ORDER BY icerik_id DESC LIMIT $limit"); // Bu id den öncekileri gösterme
        foreach($query as $row) {
            $id = $row["icerik_id"];
            echo $row["icerik_baslik"]."<hr>";
        } 

        if($toplam > $limit){ // Eğer limitin sonuna gelmediysek, daha fazla göster tuşu çıksın.
            echo '<div id="menu_'.$id.'"> 
                <button class="show_more" id="'.$id.'">Daha Fazla Göster</button>
                <span class="loading" style="display:none;">Yükleniyor...</span>
            </div>';
        }else { // Eğer sonuna geldiyse, uyarı mesajı çıkartsın.
            echo 'Hepsi bu kadar.';
        }
    }
?>