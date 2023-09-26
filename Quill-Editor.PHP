<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quill Editörü</title>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
</head>
<body>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        print_r($_POST);
    }
?>

<!-- Editör içeriğini göndermek için bir form oluşturun -->
<form method="post" onsubmit="submitForm()">
    <input type="hidden" id="editorContent" name="editorContent">
    <div id="editor"></div>
    <input type="submit" value="Gönder">
</form>

<!-- Quill Editörünü içe aktarın -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
   // Quill editörünün araç çubuğu seçenekleri
   var toolbarOptions = [
        ['bold', 'italic', 'underline', 'strike'],          // Kalın, italik, altı çizili, üstü çizili düğmeler
        ['blockquote', 'code-block'],                       // Alıntı, kod bloğu
        ['image'],                                          // Resim ekleme
        ['video'],                                          // Video ekleme
        [{ 'list': 'ordered'}, { 'list': 'bullet' }],       // Sıralı ve sırasız liste
        [{ 'script': 'sub'}, { 'script': 'super' }],        // Üst simge/alt simge
        [{ 'indent': '-1'}, { 'indent': '+1' }],            // Girinti artırma/azaltma
        [{ 'direction': 'rtl' }],                           // Metin yönü
        [{ 'size': ['small', false, 'large', 'huge'] }],    // Özel boyut dropdown
        [{ 'header': [1, 2, 3, 4, 5, 6, false] }],          // Başlık düğmeleri
        [{ 'color': [] }, { 'background': [] }],            // Tema varsayılanları ile renkler
        [{ 'font': [] }],                                   // Yazı tipi
        [{ 'align': [] }],                                  // Metin hizalama
        ['clean']                                           // Biçimlendirmeyi kaldırma düğmesi
    ];

    // Quill editörünü oluşturun ve ayarlarını yapın
    var quill = new Quill('#editor', {
        theme: 'snow',                                      // Tema: 'snow' veya 'bubble' seçilebilir
        modules: {
            toolbar: toolbarOptions
        }
    });

    // Form gönderildiğinde editör içeriğini gizli bir alana atayan işlev
    function submitForm() {
        var editorContent = quill.root.innerHTML;
        document.getElementById("editorContent").value = editorContent;
    }
</script>

</body>
</html>
