<?php

//CSV DOSYASI OLUŞTURMA VE OKUMA

$file = "names.csv";

$names = array("Mehmet", "Kemal", "Fatih", "Mustafa");

touch($file);
$new = fopen($file, "wbt");

foreach ($names as $name) {
    fwrite($new, "$name;");
}
fclose($new);



?>