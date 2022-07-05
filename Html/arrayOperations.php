<?php
//Array Operations
//Unset
$students = array("Jhon", "Melina", "Errick", "Sementha");

unset($students[1], $students[3]); // Dizide elaman kaldırma işlemi.
//$students = array(); //Dizinin içini boşaltır. Çünkü aynı isimdeler.

foreach ($students as $student) {
    echo "$student - "; //Jhon - Errick
}
echo "<hr>";


//Array Reverse
$students2 = array_reverse($students); //Dizi elemanları ters olarak yazdırılır.

foreach ($students2 as $student2) {
    echo "$student2 - "; //Errick - Jhon
}
echo "<hr>";

//Unshift
$name = array_unshift($students, "Ali", "Ayşe"); //Dizinin başına eleman ekler.

foreach ($students as $student) {
    echo "$student - "; //Ali - Ayşe - Jhon - Errick
}
echo "<hr>";


//Shift
array_shift($students); //Dizinin başındaki elemanı siler.

foreach ($students as $student) {
    echo "$student - "; //Ayşe - Jhon - Errick
}
echo "<hr>";


//Push
array_push($students, "Garry", "Leia"); //Dizinin sonuna ekleme yapar.

foreach ($students as $student) {
    echo "$student - "; //Ayşe - Jhon - Errick - Garry - Leiaa
}
echo "<hr>";

//Pop

array_pop($students); //Dizinin sondali elamanı siler.

foreach ($students as $student) {
    echo "$student - "; //Ayşe - Jhon - Errick - Garry
}
echo "<hr>";

//Sort
$notes = array("Turkish" => "60", "Maths" => "90", "Physics" => "100");

asort($notes); //Sıralama yapmak için kullanılır.(küçükten büyüğe)
arsort($notes); //Sıralama yapmak için kullanılır.(büyükten küçüğe)

print_r($notes); // Array ( [Physics] => 100 [Maths] => 90 [Turkish] => 60 )s
echo "<hr>";


//Shuffle

$students1 = array("Jhon", "Melina", "Errick", "Sementha"); //random karıştırma işlemi
shuffle($students1);
print_r($students1);


//Count

$numbers = array(1, 3, 15, 7, 19, 10);

echo "<hr>Toplam Elaman: " . count($numbers); //Arraydaki elaman sayısı //sizeof($.) şek. kullanılabilir.
echo "<br>Toplama Sonucu: " . array_sum($numbers); //Toplama işlemi yapmak için "sum"
echo "<br>Çarpım Sonucu: " . array_product($numbers); //Çarpma işlemi için "product"


?>