// Farklı Sekmeye Geçince Diğer Sitenin Başlığının Değişmesi
// Örneğin sitenin sekmesini köşeye attığınızda YouTube'ye baktığınızda başlık "beni unutma ama :(" gibi yazabilir. Yaratıcı. ;)

var yenibatu = 'Filmi Unutma..';
var eskibatu = document.title;
window.onblur = function () { document.title =yenibatu; }
window.onfocus = function () { document.title = eskibatu; }
