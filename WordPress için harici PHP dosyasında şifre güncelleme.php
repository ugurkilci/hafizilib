<?php

// Eğer form gönderildiyse
if (isset($_POST['change_password'])) {
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];
    $confirm_new_password = $_POST['confirm_new_password'];

    // Mevcut kullanıcıyı al
    $user = wp_get_current_user();

    // Eski şifreyi kontrol et
    if (wp_check_password($old_password, $user->user_pass, $user->ID)) {
        // Yeni şifreler eşleşiyor mu?
        if ($new_password === $confirm_new_password) {
            // Şifreyi güncelle
            wp_set_password($new_password, $user->ID);

            // Başarı mesajı
            echo "Şifreniz başarıyla değiştirildi.";
        } else {
            echo "Yeni şifreler eşleşmiyor.";
        }
    } else {
        echo "Eski şifre yanlış.";
    }
}
echo '<!-- Şifre değiştirme formu -->
<form action="" method="POST">
    <label for="old_password">Eski Şifre:</label>
    <input type="password" name="old_password" required><br>

    <label for="new_password">Yeni Şifre:</label>
    <input type="password" name="new_password" required><br>

    <label for="confirm_new_password">Yeni Şifreyi Tekrar Girin:</label>
    <input type="password" name="confirm_new_password" required><br>';

    wp_nonce_field('password_change_action', 'password_change_nonce');

    echo '<input type="submit" name="change_password" value="Şifreyi Değiştir">
</form>';
