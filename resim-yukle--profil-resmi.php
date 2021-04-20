<?php
if (isset($_POST["resimguncelle"])) {
    if(isset($_FILES['dosya'])){
        $hata = $_FILES['dosya']['error'];
        if($hata != 0) {
            echo '<p class="alert alert-danger">Yüklenirken bir hata gerçekleşti. Resim seçmemiş olabilirsiniz. Lütfen tekrar deneyiniz.</p>';
        } else {
            $boyut = $_FILES['dosya']['size'];
            $tip = $_FILES['dosya']['type'];
            $isim = $_FILES['dosya']['name'];
            $uzanti = explode('.', $isim);
            $uzanti = $uzanti[count($uzanti)-1];
            if(($tip != 'image/png' || $uzanti != 'png') && ($tip != 'image/jpeg' || $uzanti != 'jpg') && ($tip != 'image/jpeg' || $uzanti != 'jpeg')) {
                echo '<p class="alert alert-warning">Yanlızca resim dosyaları yüklebilirsiniz.</p>';
            } else {
                $dosya = $_FILES['dosya']['tmp_name'];
                $resimlink = 'cdn/resim-' . $_SESSION["uye_id"].".jpg";
                copy($dosya, $resimlink);

                // Üyeler tablosuna profil resmini yükle
                $veriguncelle = $db->prepare("UPDATE uyeler set uye_resim=? WHERE uye_id=?");
                $veriguncelle ->execute([
                    $resimlink,
                    $_SESSION["uye_id"]
                ]);

                $_SESSION["uye_resim"] = $resimlink;
                if ($veriguncelle) {
                    header("LOCATION:ayarlar"); // profilin için seç
                } else {
                    echo '<p class="alert alert-danger">Bir hata oldu lütfen tekrar deneyiniz.</p>';
                }
            }
        }
    }
}
    echo '
    <form action="" method="post" enctype="multipart/form-data">
        <img src="'.$_data["uye_resim"].'?v='.time().'" width="48" height="48" class="rounded-circle">
        <input type="file" name="dosya" class="ml-2"><br /><br />
        <input type="submit" name="resimguncelle"  class="btn btn-green" value="Profil Resmimi Güncelle">
    </form>
    <hr>';
