PHP ile Ziyaret Süresi algoritması oluştur

PHP ile bir ziyaret süresi algoritması oluşturmak için, öncelikle bir tarih ve saat nesnesi oluşturmalısınız. Bu, PHP'de DateTime sınıfını kullanarak yapılabilir. Örneğin, şu şekilde bir tarih ve saat nesnesi oluşturabilirsiniz:

$date = new DateTime();
Daha sonra, ziyaretçinin son ziyaret tarihini ve saatini bir değişkende saklayabilirsiniz. Bu değer, önceden bir veritabanında veya bir dosyada saklanmış olabilir. Örneğin, bir MySQL veritabanında sakladığınızı varsayalım:

$last_visit = "2022-11-30 12:34:56";
Sonra, $last_visit değişkenini DateTime nesnesine dönüştürerek ziyaret süresini hesaplamaya hazır hale getirin:

$last_visit_time = new DateTime($last_visit);
Son olarak, $date ve $last_visit_time nesnelerini kullanarak ziyaret süresini hesaplayabilirsiniz. Örneğin, aşağıdaki gibi bir fonksiyon yazabilirsiniz:

function getVisitDuration($date, $last_visit_time) {
  $duration = $date->diff($last_visit_time);
  return $duration->format("%a gün, %h saat, %i dakika ve %s saniye");
}

Bu fonksiyon, iki tarih arasındaki farkı gün, saat, dakika ve saniye cinsinden döndürür. Örneğin, şu şekilde çağırılabilir:

echo getVisitDuration($date, $last_visit_time);
Bu kod, ziyaretçinin son ziyaretinden bu yana geçen süreyi ekrana yazar.
