<?php

//Arrays 2
//Merge

$f1team1 = array("Mercedes", "Aston Martin", "Williams", "Mclaren");
$f1team2 = array("Ferrari", "Alfa Romeo", "Haas");

$f1teams = array_merge($f1team1, $f1team2); //İki diziyi birleştirir. Tek dizi oluşturur.
print_r($f1teams);
echo "<hr>";


//Diff
$numbers1 = array(1, 9, 2, 3);
$numbers2 = array(2, 0, 2, 3);

$numbers = array_diff($numbers1, $numbers2); //İlk diziyi ikincisiyle karşılaştırır. Farklı olanları yeni diziye yazdırır.
print_r($numbers);
echo "<hr>";


//Inarray
$cars = array("Renault", "Honda", "Ford", "Bmw");

if (in_array("Tofas", $cars)) { //Dizi içinde arama yapma
    echo "Found";
}
else {
    echo "Not Found!";
}
echo "<hr>";

//Rand

$f1team3 = array("Mercedes", "Aston Martin", "Williams", "Mclaren");
$f1teams2 = array_rand($f1team3); //Dizi içinden rastgele eleman seçer. İndisi ekrana yazdırır.
echo "Team: ".$f1team3[$f1teams2]; //Burada takım ismi döndürülür.
; 

?>