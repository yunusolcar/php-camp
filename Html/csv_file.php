<?php

//CSV DOSYASI OLUŞTURMA VE OKUMA

/* $file = "names.csv";
 
$names = array("Mehmet", "Kemal", "Fatih", "Mustafa");
 
touch($file); $new = fopen($file, "wbt");
 
foreach ($names as $name) {
 fwrite($new, "$name;"); } fclose($new); */

$file = fopen("names.csv", "rbt");

while (!feof($file)) {
    $satir = fgetcsv($file, filesize("names.csv"), ";");
}

foreach ($satir as $content) {
    echo "$content<br>";
}
fclose($file);
?>