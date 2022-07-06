<?php


//FUNCTIONS
//Parametresiz Fonksiyonlar
function fullName()
{
    echo "Yunus Xxx <hr>";
}

fullName();


//2
function personalName()
{
    for ($i = 1; $i <= 7; $i++) {
        echo "$i - Yunus Xxx <br>";

    }
}

personalName();
echo "<hr>";



//Parametreli Fonksiyonlar
function personalInfo($number, $name)
{
    for ($i = 1; $i <= $number; $i++) {
        echo "$i - $name <br>";
    }
}

personalInfo(7, "Yunus Xxx");
echo "<hr>";
//İlk parametre kaç kere yazılacağı,
//ikinci parametre string olduğu için tırnaklar
//arasında yazılır.



//Varsayılan Değerli Fonksiyonlar
function animalName($anumber = 0, $animalname = "")
{
    for ($i = 1; $i <= $anumber; $i++) {
        echo "$i - $animalname <br>";

    }
}

animalName(7);
echo "<hr>";



//Global Değişkenli Fonksiyonlar
function fruit()
{
    global $fruitname;
    echo $fruitname;
}

$fruitname = "Golden Apple";
fruit();
echo "<hr>";



//Dışarı değer döndüren
function topla($sayi1 = 0, $sayi2 = 0)
{
    $toplama = $sayi1 + $sayi2;
    return $toplama;
}

$sonuc = topla(15, 25);
echo "İşlem Sonucu : <span style='color:green'><b>$sonuc</b></span>";
echo "<hr>";


//e.g
function deger()
{
    $toplam = 20 + 75;
    return $toplam;
}
$islem = deger();
echo "İşlem Sonucu : <span style='color:green'><b>$islem</span>";

?>