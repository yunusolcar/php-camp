<?php

//METİN İŞLEME FONKSİYONLARI

//Strlen
$text = " Ne mutlu Türküm diyene "; // Toplam karakter sayısını verir. (metin içerisinde Türkçe karakter varsa hatalı sayım yapmakta)

echo "Toplam: " . mb_strlen($text, "utf-8") . "<hr>"; //mb ve utf-8 parametresi ile çözüldü. >Toplam: 24

echo "Sol Boşluksuz: " . mb_strlen(ltrim($text), "utf-8") . "<hr>"; //Sol Boşluksuz >Sol Boşluksuz: 23

echo "Sağ Boşluksuz: " . mb_strlen(rtrim($text), "utf-8") . "<hr>"; //Sağ Boşluksuz >Sağ Boşluksuz: 23

echo "Boşluksuz: " . mb_strlen(trim($text), "utf-8") . "<hr>"; //Boşluksuz >Boşluksuz: 22



//Substr
echo substr($text, -7) . "<hr>"; //sondaki 7 karakteri yazar.     >diyene

echo substr($text, 0, -7) . "<hr>"; //sondaki 7 karakteri siler.  >Ne mutlu Türküm



//Strtolower
$text1 = "Ne mutlu Türküm diyene ";
echo strtolower($text1) . "<hr>"; // Bütün karakterleri küçük olarak yazdırır.  >ne mutlu türküm diyene

echo mb_strtoupper($text1, "utf-8") . "<hr>"; // Bütün karakterleri büyük olarak yazdırır. mb ile türkçe karakterler doğru bir şekilde ekrana yazıldı.  >NE MUTLU TÜRKÜM DIYENE


echo ucfirst($text1) . "<hr>"; //İlk harf büyük (uc = uppercase)   >Ne mutlu Türküm diyene

echo lcfirst($text1) . "<hr>"; //İlk harf küçük (ul = lowercase)   >ne mutlu Türküm diyene

echo ucwords($text1) . "<hr>"; //Bütün kelimelerin ilk harfi büyük (mb ... utf-8)   >Ne Mutlu Türküm Diyene



//Strrev
echo strrev($text) . "<hr>"; // ters yazar 



//Strstr
if (strstr($text, "ne") == true) { //metinde kelime/harf arama
    echo "Bulundu" . "<hr>";
}
else {
    echo "Bulunamadı" . "<hr>"; //   >Bulundu
}



//Str_replace
echo str_replace("mutlu", "güzel", $text) . "<hr>"; //Metindeki kelimeyi değiştirme   >Ne güzel Türküm diyene
echo str_replace(" ", "", $text) . "<hr>"; //metindeki boşlukları kaldırma            >NemutluTürkümdiyene



//Htmlentities
$text2 = "<b><i><u>Türkiye'nin başkenti Ankara'dır.</u></i></b>"; //xss için ascii koruması :) ampersant önlemi alınır.
echo htmlentities($text2) . "<hr>";

echo htmlspecialchars($text2, ENT_QUOTES) . "<br>"; //ascii code a dönüştü //iki tırnak da dönüştürüldü

echo htmlspecialchars($text2, ENT_NOQUOTES) . "<br>"; //dönüştürülmedi

echo htmlspecialchars($text2, ENT_COMPAT) . "<hr>"; //çift tırnaklar dönüştürüldü. tek tırnak dönüştürülmedi. Amaç tırnak saldırılarından korunmak



//strip_tags
echo strip_tags($text2) . "<br>"; //text teki tüm etiketleri temizleyip geçersiz kılar.

echo strip_tags($text2, "<b><i>"); //b ve i etiketini es geçip diğer etiketleri temizler.   >Türkiye'nin başkenti Ankara'dır. (bold, italik)

echo "<hr>";



//addslashes and stripslashes
$etkisiz = addslashes($text2); // Tek tırnaktan önce ters slaş konuldu.   >Türkiye\'nin başkenti Ankara\'dır.
$etkili = stripslashes($etkisiz); //stripslash ile ters slaşı kaldırıp metini eski haline dönderdik.

echo "$etkisiz <br> $etkili" . "<hr>";



//nl2br
$text4 = "Ne\nmutlu\nTürküm\ndiyene";

echo nl2br($text4) . "<hr>"; // \n <br> etiketine dönüştü. 
//Ne
//mutlu
//Türküm
//diyene



//explode and implode
$text6 = "Ne mutlu Türküm diyene!"; //metini boşluk karakterlerinden parçaladık.
$icerik = explode(" ", $text6);

foreach ($icerik as $eleman) {
    echo $eleman . "<br>";
//Ne
//mutlu
//Türküm
//diyene!
}
echo "<hr>";


$icerik2 = implode("-", $icerik); //parçalanan kısımların arasına implode ile tire işareti atadık
echo $icerik2; //   >Ne-mutlu-Türküm-diyene!


?>