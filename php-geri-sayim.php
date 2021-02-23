<?php
  /*Bugünkü Zamandan Önce Bir Tarih Girilirse Kaç Gün Geçtiğini,
  Bugünkü Zamandan Sonra Bir Tarih Girilirse Ne Kadar Kaldığığını Verir...
  */
 
  define("SANIYE",1);
  define("DAKIKA_SN",60*SANIYE);
  define("SAAT_SN",60*DAKIKA_SN);
  define("GUN_SN",24*SAAT_SN);
 
  class KalanZaman {
    var $snfark,$gun,$saat,$dakika,$saniye;
    var $durum="Var";
    function KalanZaman($g) {
      $this->hesapla($g);
    }
    function hesapla($v) {
      $this->snfark  = strtotime($v)-time();
      if($this->snfark<0) {
        $this->snfark *= (-1);
        $this->durum   = "Geçti";
      }
      $this->gun    = floor($this->snfark/GUN_SN);
      $this->snfark  -= $this->gun*GUN_SN;
      $this->saat   = floor($this->snfark/SAAT_SN);
      $this->snfark  -= $this->saat*SAAT_SN;
      $this->dakika    = floor($this->snfark/DAKIKA_SN);
      $this->snfark  -= $this->dakika*DAKIKA_SN;
      $this->saniye    = $this->snfark;
    }
    function rString() {
      $retVal = "";  if($this->gun!=0)
      $retVal .= $this->gun." Gün ";
      if($this->saat!=0)   $retVal .=$this->saat." Saat ";
      if($this->dakika!=0)   $retVal .=$this->dakika." Dakika ";
        if($this->saniye!=0)   $retVal .=$this->saniye." Saniye";
          return $retVal." ".$this->durum;
    }
  }
 
 
  $girilen_zaman = "2005-06-10 10:00:00";
  $kalan_zaman = new KalanZaman("$girilen_zaman"); //Girilen Değerler MySQL datetime Formatıdır.  :)
 
  echo "Girilen Zaman :$girilen_zaman<br>";
  echo $kalan_zaman->rString();
?>
