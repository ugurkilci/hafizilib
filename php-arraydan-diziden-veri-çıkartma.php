<?php

// bir dizideki veriyi çıkartabilmek için çıkartmak istediğiniz verinin dizideki numaralarına ihtiyacınız var onun için array search ile veriyi dizide aratıp onun kaçıncı sırada olduğunu tespit ediyoruz.
$array_search = array_search('çıkarılacak veri', $array);
// seçtiğimiz veriden diziden seçmeliyiz
$array_cikart = $array[$array_search]
// şimdi listeden çıkartmayı yazıyoruz:
unset($array_cikart);

// kısaca

unset($array[array_search('', $array)]);
