// Kullanıcı ID ile kullanıcı verilerini çek
$data = $db->prepare("SELECT * FROM uyeler WHERE uye_id=?");
$data ->execute([
  $_SESSION["uye_id"]
]);
$_data = $data->fetch(PDO::FETCH_ASSOC);
    
<form action="" method="post">
  <?php
    echo md5(sha1("456856++"));
    if ($_POST) {
      // Biraz güvenlik "htmlspecialchars"
      $msifre = htmlspecialchars($_POST["msifre"]);
      $ysifre = htmlspecialchars($_POST["ysifre"]);
      $tsifre = htmlspecialchars($_POST["tsifre"]);

      if (empty($msifre) || empty($ysifre) || empty($tsifre)) {
        // Boşluk kontrolü
        echo '<br /><p class="alert alert-warning">Lütfen boş bırakmayınız!</p>';
      } else {
        $msifre = md5($msifre); // Şifrele
        $ysifre = md5($ysifre);
        $tsifre = md5($tsifre);

        // Kullanıcının mevcut şifresini veritabanı ile kontrol etme
        $cek = $db->prepare("SELECT * FROM uyeler WHERE uye_sifre =:uye_sifre && uye_id =:uye_id");
        $cek->execute([
        'uye_sifre'=>$msifre,
        'uye_id'=>$_data["uye_id"]
        ]);
        $saydirma = $cek->rowCount();

        if($saydirma >0){ // Mevcut şifresi aynıysa devam etsin.
          if ($ysifre == $tsifre) { // Yeni şifre ve şifre tekrarı eşit mi kontrol et
          
            // Şifre güncelleme işlemleri
            $veriguncelle = $db->prepare("UPDATE uyeler SET uye_sifre=? WHERE uye_id=?");
            $veriguncelle ->execute([
              $tsifre,
              $_SESSION["uye_id"]
            ]);

            if ($veriguncelle) { // Şifre güncellendiyse 1 saniye sonra aynı sayfaya yönlendirsin.
              echo '<br /><p class="alert alert-success">Başarıyla güncellendi.</p>';
              header("REFRESH:1; URL=sifredegistir");
            } else { // Veritabanı sorunu olunca haber versin.
              echo '<br /><p class="alert alert-danger">Başarısız güncelleme.</p>';
            }
          } else {
            echo '<br /><p class="alert alert-warning">Şifreler eşit değil!</p>';
          }
        }else{ // Mevcut şifresi farklıysa hata versin.
          echo '<br /><p class="alert alert-danger">Bu mevcut şifren değil!</p>';
        }
      }
    }
  ?>
  <strong>Mevcut Şifre</strong>
  <input type="password" name="msifre" class="form-control">
  <strong>Yeni Şifre</strong>
  <input type="password" name="ysifre" class="form-control">
  <strong>Yeni Şifre (Tekrar)</strong>
  <input type="password" name="tsifre" class="form-control"><br />
  <input type="submit" class="btn btn-primary" value="Güncelle">
</form>
