<?php

//HAZIR FONKSİYONLAR
/*
header("Cache-Control:no-cache, must-revalidate"); //Tarayıcının cache tutmaması için yazılmalıdır. Arada da sayfayı kontrol etmisi gerektiğini belirttik.
header("Expires:Sun,12 May 2000 00:00:00 GMT"); //Geçmiş tarih tanımlaması

header("Location: https://github.com/yunusolcar"); //Yönlendirme
exit();

header("Refresh:10; Url=https://github.com/yunusolcar"); //Süre belirterek yönlendirme
die("10 saniye sonra yönlendiriliceksiniz"); //die ile Bundan sonraki kodlar çalıştırılmayacaktır. parantez içine mesaj yazılabilir.



//Tarih Bilgileri
$bugun =getdate(); //Anlık tarih saat bilgisi
echo $bugun["second"];

echo "Bugün: " .date("d-m-Y H:i:s"); //Gün - ay - yıl Saat - dakika - saniye



//Gün ay yıl Belirleme
$days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

$months = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

echo "Today: " . $days[date("w")] . "<br>";

echo "This Month: " . $months[date("n")] . "<br>";

echo "Now: " . date("d") . $months[date("n")] . $date("Y") . $days[date("w")] . "<br>";

echo "Time: " . date("H:i:s");



//Rastgele Sayı Üretimi
echo "Rastgele Sayı: " .rand(); //Rastgele herhangi bir sayı üretir. 

echo "<br>";

echo "Rastgele Sayı: " .mt_rand(10,99) // 10 ile 99 arası sayı üretir.



//Yuvarlama 
$number = 23.4;

echo "Ceil: " . ceil($number) . "<br>"; //Üste yuvarlar -> 24

echo "Floor: " . floor($number) . "<br>"; //Alta yuvarlar -> 23

echo "Round: " . round($number) . "<br>"; //Ondalığa göre yuvarlar -> 23



//Max - Min işlemleri
$largest = max(7, 18, 42, 20, 69, 93);

$smallest = min(46, 73, 15, 22, 84, 39);

echo "Largest: " . $largest . "<br>";

echo "Smallest: " . $smallest . "<br>";
*/


//Mutlak değer, karekök, üs, mod, logaritma , 10'luk taban log, kuvvet alma, hipotenüs

$veriable = 81;

echo "Mutlak Değer: " . abs($veriable) . "<br>";

echo "Karekök: " . sqrt($veriable) . "<br>";

echo "4. üssü: " . pow($veriable, 4) . "<br>";

echo "3'ten kalanı: " . fmod($veriable, 3) . "<br>";

echo "Logaritması: " . log($veriable) . "<br>";

echo "10'luk Log: " . log10($veriable) . "<br>";

echo "E üssü -5: " . exp(-5) . "<br>";

echo "9-16'Lık Dik Üçgenin Hipotenüsü: " . hypot(9,16) . "<br>";

?>