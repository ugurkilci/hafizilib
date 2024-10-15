function secondsToHms(d) {
    d = Number(d);
    var h = Math.floor(d / 3600);
    var m = Math.floor(d % 3600 / 60);
    var s = Math.floor(d % 3600 % 60);

    var hDisplay = h > 0 ? h + " saat, " : "";
    var mDisplay = m > 0 ? m + " dakika, " : "";
    var sDisplay = s > 0 ? s + " saniye" : "";
    return hDisplay + mDisplay + sDisplay; 
}


// örnekler
console.log( secondsToHms( 30 ) ); // '30 saniye'
console.log( secondsToHms( 350 ) ); // '5 dakika, 50 saniye'
console.log( secondsToHms( 5000 ) ); // '1 saat, 23 dakika, 20 saniye'

// genel kullanım
console.log( `Bu olay ${secondsToHms( 5000 )} önce gerçekleşmiştir.` ); // Bu olay 1 saat, 23 dakika, 20 saniye önce gerçekleşmiştir.
