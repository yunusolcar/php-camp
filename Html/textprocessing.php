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





?>