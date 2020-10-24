<?php

if (!@$_SESSION) {
		$kadi = @$_COOKIE["kadi"];
		$sifre = @$_COOKIE["sifre"];
		if ($kadi && $sifre) {
			
			$uyecek = $db -> prepare("SELECT * FROM uyeler WHERE uye_kadi=? && uye_sifre=?");
			$uyecek -> execute(array(
				$kadi,
				$sifre
			));
			$fetch    = $uyecek -> fetch(PDO::FETCH_ASSOC);
			$rowcount = $uyecek -> rowCount();
			
			if ($rowcount) { // Giriş yapılmışsa
				
				$_SESSION["uye_id"] 			= $fetch["uye_id"]; 		// Üye id
				$_SESSION["uye_kadi"] 			= $fetch["uye_kadi"]; 		// Üye kullanıcı adı
				$_SESSION["uye_sifre"] 			= $fetch["uye_sifre"]; 		// Üye şifresi
				
			}
		}
	}
