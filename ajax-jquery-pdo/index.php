<?php 
    // Uğur KILCI, ugurkilci.com
    include 'ayar.php'; // Veritabanı bağlantısı

    echo '<div class="liste">'; // Listeler burada dönecek. Bu yüzden classa liste dedim.
        $query = $db->query("SELECT * from icerikler order by icerik_id desc limit 10"); 
        foreach($query as $row) { // Klasik listeleme
            $id = $row["icerik_id"]; // Son id'yi değişkene atıyoruz. Bu bize lazım çünkü yeni yüklenecek yazılar 0dan listelemesin. Hangi id'den kaldıysa oradan listelesin.

            echo $row["icerik_baslik"]."<hr>";
        }
    echo '</div>';

    // id menu_id yapmalıyız. Bu şekilde son id değişkenini js ile ajaxa gönderebiliriz.
    echo '
    <div class="menu" id="menu_'.$id.'"> 
            <button class="show_more" id="'.$id.'">Daha Fazla Göster</button>
            <span class="loading" style="display:none;">Yükleniyor...</span>
        </div>
    ';
    
?>

<script src="js/jquery.js"></script> <!-- JQuery -->
<script>
$(document).ready(function() {
    $(document).on("click",".show_more",function() {
        var id =  $(this).attr("id");
            $(".show_more").hide(); // Daha fazla göster tuşunun classı, bu sayede tuşu tanımladık.
            $(".loading").show(); // Yükleniyor yazısı tanımlanması
            $.ajax({
                url: "ajaxmajax.php", // Ajax dosyamız
                data: {id:id},					
                type: "post", // Tipi post yaptık
                success:function(e) {
                    $("#menu_"+id).remove(); // JS ile idleri parçalıyoruz.
                    $(".liste").append(e); // liste classı ile yazdırıyoruz.
                }
           });
    });
});
</script>
