<?php

//LOOPS
//For, While, Do...While, Foreach

for ($i = 25; $i <= 100; $i += 5) {
    echo "$i  <br>";

}

$a = 1;
while ($a <= 34) {
    echo "$a - <span style='color:green;'>Hello World</span> <br>";
    $a += 2;
}

$x = 1;
do {
    echo "$x - 1 times<br>";
    $x++;
} while ($x > 100); //Karşılaştırma işlemi döngü sonunda yapılıyor.


$fruits = array("Orange", "Kiwi", "Watermelon", "Cherry");
foreach ($fruits as $fruit) {
    echo "$fruit <br>";
}
?>