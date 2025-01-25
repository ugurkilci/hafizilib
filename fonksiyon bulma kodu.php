<?php
    // Bir fonksiyon yazdınız ve onun hangi klasörün içinde olduğunu bulamıyorsanız, bu kodu çalıştırdığınızda ŞIP diye bulabilirsiniz!
    function findFunctionLocation($functionName) {
        if (function_exists($functionName)) {
            $reflection = new ReflectionFunction($functionName);
            echo "Fonksiyon: " . $functionName . "\n";
            echo "Dosya: " . $reflection->getFileName() . "\n";
            echo "Satır: " . $reflection->getStartLine() . "\n";
        } else {
            echo "Fonksiyon '$functionName' bulunamadı.\n";
        }
    }
    
    // Örnek kullanım
    findFunctionLocation('aradiginiz_fonksiyon');
?>
