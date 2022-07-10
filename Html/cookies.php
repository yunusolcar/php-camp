<?php

//ÇEREZ (COOKIE) VE OTURUM (SESSION) İŞLEMLERİ

/*setcookie(" test", "Yunus Xxx", time() + 24 * 60 * 60, "/", "testwebsite.com", true, true); */
//ilk parametre çereze verdiğimiz isim = test, ikinci parametre çerez dosyasının içine kaydedilecek bilgi = yunus xxx, 
//üçüncü parametre ne kadar süre sonra bu çerez dosyası kendini yok etsin = 3600 saniye, 
//dördüncü parametre çerez dosyasının hangi dosyalar içerisinde kullanılmasını yazabiliriz= "/"
//beşinci parametre alan adının belirlediğimiz kısım
//altıncı kısım http mi yoksa ssl destekli mi olduğunu tanımladığımız kısım, true yaparsak ssl sertifikası olan sitelerde (https) aktif olur
// js aracılığıyla çereze erişilip işlem yapılıp yapılamayacağını belirlediğimiz kısım =true


/*e.g setcookie("fullName", "Yunus Xxx", time() + 3600);
 //echo "Çerez içeriği: " . $_COOKIE["fullName"];
 if (isset($_COOKIE["visiter"])) { //isset bir değişkenin tanımlanıp tanımlanmadığını öğrenmek için kullanılır
 echo "Cookie file found"; // if visiter adında cookie tanımlandığını kontrol et, tanımlandıysa şunu yaz } else {
 echo "Cookie file not found!";
 setcookie("visiter"); } */

//empty
setcookie("coder", "Yunus xxx");

if (empty($_COOKIE["coder"])) { //çerezin içinin boş mu dolu mu olduğunu kontrol edebiliriz
    echo "Cookie empty";
}
else {
    echo "Cookie full";
}
echo "<hr>";



//Silinme süresi bitmemiş çerezi silme işlemi ve güvenli isim şifreleme
$fullName = sha1(md5("Yunus Xxx")); //cookie bilgilerini şifreleme

setcookie("fullName", $fullName, time() + 3600);

echo "Çerez içi: " . $_COOKIE["fullName"];

//setcookie("fullName", "", time() - 1);






?>