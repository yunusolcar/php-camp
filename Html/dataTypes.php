<?php
/* 
DATA TYPES 

INTEGER -> (TAM SAYI)
FLOAT , DOUBLE -> (ONDALIK, LAYAN NOKTALI SAYI)
STRING -> (METİN)
BOOLEAN -> (MANTIKSAL, LOGIC)
ARRAY -> (DİZİ)
OBJECT -> (NESNE)


VARIABLES (DEĞİŞKENLER)

$ ile değişkenler ifade edilir. e.g: $sayi && $sayi1
*/

$degisken1 = 30; // -> Integer (Tam sayı)
$degisken2 = 17.5; // -> Double, Float (Ondalık sayı)
$degisken3 = "Beatrice"; // -> String (Metin)

echo "
      Number 1: $degisken1 <br>
      Number 2: $degisken2 <br>
      Name: $degisken3
"; //print

/* 
CONST

define ("pi","3.14"); sabit ve alacağı değer
*/
define ("pi","3.14"); 
echo pi;

?>