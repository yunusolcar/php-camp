<?php

//ARRAYS 

$students = array(4, 6, 7, 8, 10, "Beatrice", "Vergilius");

/* $students = array(); $students[] = 45; $students[] = "Ali"; */

echo $students[5]; //Beatrice
echo "<hr>";

foreach ($students as $student) {
    echo "$student - ";
}
echo "<hr>";

//1
$customers = array();
$customers[0] = array("fullName" => "Sarah", "expenditure" => "50");
$customers[1] = array("fullName" => "Freya", "expenditure" => "70");
$customers[0] = array("fullName" => "Kros", "expenditure" => "90");

//2
$customers = array(
        array("fullName" => "Sarah", "expenditure" => "50"),
        array("fullName" => "Freya", "expenditure" => "70"),
        array("fullName" => "Kros", "expenditure" => "90")
);

//3
$customers = array();
$customers[0]["fullName"] = "Sarah";
$customers[0]["expenditure"] = "50";
$customers[1]["fullName"] = "Freya";
$customers[1]["expenditure"] = "70";
$customers[2]["fullName"] = "Kros";
$customers[2]["expenditure"] = "90";

echo $customers[1]["fullName"]; //Çok boyutlu dizilerde echo işlemi. Önce indis sonra getirilmesi gereken anahtarı yazılmalı
echo " - ";
echo $customers[1]["expenditure"];
echo "<hr>";

foreach ($customers as $customer) {
    echo $customer["fullName"] . " - " . $customer["expenditure"];
    echo "<br><br>";
}


?>