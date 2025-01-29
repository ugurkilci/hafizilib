<?php

// Eğer form gönderildiyse
if (isset($_POST['change_email'])) {
    $new_email = $_POST['new_email'];

    if (empty($new_email)) {
        echo '<p class="bg-yellow-100 text-yellow-800 rounded-xl p-3">Lütfen yeni e-posta adresini boş bırakmayınız!</p>';
    } else {
        // Mevcut kullanıcıyı al
        $user = wp_get_current_user();

        // Yeni e-posta adresinin geçerli olup olmadığını kontrol et
        if (is_email($new_email)) {
            // E-posta adresini güncelle
            wp_update_user(array(
                'ID' => $user->ID,
                'user_email' => $new_email
            ));

            // Başarı mesajı
            echo '<p class="bg-green-100 text-green-800 rounded-xl p-3">E-posta adresiniz başarıyla güncellendi! :)</p>';
            header("refresh:1;url=settings.php?q=email");
        } else {
            echo '<p class="bg-red-100 text-red-800 rounded-xl p-3">Geçersiz bir e-posta adresi girdiniz!</p>';
        }
        
    }
}

// Mevcut kullanıcıyı al
$user = wp_get_current_user();
$current_email = $user->user_email;  // Mevcut e-posta adresini al

echo '<h1 class="'.$h1Class.' text-center">E-posta Değiştir</h1>';
echo '<!-- E-posta değiştirme formu -->
<form action="" method="POST">

    <label class="text-lg" for="new_email">Yeni E-posta:</label>
    <input type="email" name="new_email" class="'.$textClass.'" value="'.$current_email.'" required><br>';

wp_nonce_field('email_change_action', 'email_change_nonce');

echo '<div class="flex justify-center"><input type="submit" name="change_email" class="'.$buttonClass.'" value="E-posta Değiştir"></div>
</form>';
