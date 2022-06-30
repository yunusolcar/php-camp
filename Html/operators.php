<?php

//OPERATORS

$sayi1 = 30;
$sayi2 = 15;
$sonuc = 2;
$isim = "Mary";

//$sonuc = $sayi1 + $sayi2;
//$sonuc = $sayi1 - $sayi2;
//$sonuc = $sayi1 * $sayi2;
//$sonuc = $sayi1 / $sayi2;

$sonuc = $sayi1 % $sayi2;
echo $sonuc;

//$sonuc = $sayi1;

$sonuc .= $isim; // $sonuc = $sonuc.$isim; // Nokta operatörü birleşim yapar. Çıktı: 2Mary

$sonuc += $sayi1; // $sonuc = $sonuc + $sayi1; // Artı operatörü toplama yapar.

$sonuc -= $sayi1; // $sonuc = $sonuc - $sayi1; // Eksi operatörü çıkartma yapar.

$sonuc -= $sayi1; // $sonuc = $sonuc - $sayi1; // Eksi operatörü çıkartma yapar.

$sonuc *= $sayi1; // $sonuc = $sonuc - $sayi1; // Çarpma operatörü çarpma yapar.

$sonuc /= $sayi1; // $sonuc = $sonuc - $sayi1; // Bölüm operatörü bölme yapar.

$sonuc %= $sayi1; // $sonuc = $sonuc - $sayi1; // yüzde operatörü kalan bularak atama yapar.

echo $sonuc;

//e.g

$adsoyad = "Sally Wood";
$yas = 50;

//echo $adsoyad."-".$yas; //Sally Wood50
echo "Adı Soyadı :$adsoyad <br>
      Yaş: $yas"; //Tek tırnak kullanılmaz.

$yas++; // $yas += 1; && $yas = $yas + 1;
echo "-$yas";

/*

==  // Eşittir
=== //Denktir
!=  //Eşit Değildir
<>  //Farklıdır
<   //Küçüktür
>   //Büyüktür
<=  //Küçük veya Eşittir
>=  //Büyük veya Eşittir 

*/

$sayi1 = "50"; //Değeri 50, Veri Türü String
($sayi1 == 50); //True 
($sayi1 === 50); //False döndürür.

/*

&& //and ve
|| //or veya
! //not değil

($sayi1 > 50 && $sayi1 < 80); //sayi1 50 den büyük ve 80 den küçükse 
($sayi1 > 50 || $sayi1 < 80); //50 - 80 // sayi1 50 den büyük veya 80 den küçükse
!($sayi1 > 50 ) // ($sayi1 <= 50) ile aynıdır.
*/
?>