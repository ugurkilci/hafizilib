<?php

/**
 * Belirtilen klasörü (ve altındaki dosyaları/klasörleri) siler.
 *
 * @param string $klasor Silinecek klasörün yolu
 * @return bool Klasör silinirse true, aksi takdirde false döner
 */
function klasorsil($klasor) {
    // Klasör yolunu sonunda '/' olacak şekilde düzenle
    if (substr($klasor, -1) != '/') {
        $klasor .= '/';
    }

    // Klasör açılır
    if ($handle = opendir($klasor)) {
        // Klasördeki dosya/klasörleri okur
        while ($obj = readdir($handle)) {
            // Özel dizinler (., ..) hariç işlem yapar
            if ($obj != '.' && $obj != '..') {
                // Eğer klasör ise, klasör içindeki dosyalar/klasörleri siler
                if (is_dir($klasor.$obj)) {
                    if (!klasorsil($klasor.$obj)) {
                        // Alt klasör/dosya silinemediği için false döndürür
                        return false;
                    }
                }
                // Eğer dosya ise, dosyayı siler
                elseif (is_file($klasor.$obj)) {
                    if (!unlink($klasor.$obj)) {
                        // Dosya silinemediği için false döndürür
                        return false;
                    }
                }
            }
        }
        // Klasör kapatılır
        closedir($handle);
        
        // Klasörü siler
        if (!@rmdir($klasor)) {
            // Klasör silinemediği için false döndürür
            return false;
        }
        
        // Klasör başarıyla silindiği için true döndürür
        return true;
    }
    // Klasör açılamadığı için false döndürür
    return false;
}
