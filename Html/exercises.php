<?php

//e.g Bigger/Smaller

$x = 10;
$y = 207;
$z = 42;

if ($x > $y && $x > $z) {
    echo "X is bigger than other numbers";
}
else if ($y > $x && $y > $z) {
    echo "Y is bigger than other numbers";
}
else {
    ($z > $x && $z > $y);
    echo "Z is bigger than other numbers";
}

echo "<hr>";

//e.g 2

for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        $result = $i * $j;
        echo "$i x $j = <span style='color:green;'>$result</span><br>";
    }
    echo "<br><hr>";
}
?>