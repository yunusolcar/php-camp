<?php

//DİZİN İŞLEMLERİ (Indexing)

/* mkdir("deneme2", 0755); //Dizin oluşturma işlemi (dizinin ismini belirledik) */

//0 -> 8lik sayı sistemini
//7 -> Sistemin sahibinin yetkisini
//5 -> Grup yetkisini
//6 -> Herkesi anlatıyor. 0755 en güvenli değerdir.

/* if (file_exists("deneme2")) {
 echo "var"; }*/

//if ( file_exists(".......") == true ) {.........}




//Opendir - Closedir
/*$dizin = opendir("deneme2"); //Dizin açma işlemi, açılacak dizinin ismi

chmod($dizin, 0755); //erişim yetkilendirmesi tanımlandırmak
closedir($dizin); //Dizin kapatma
//dizinde işlem yapmadan önce açmak işlem bitince de mutlaka kapatmak gerekir.
*/



//Readdir
/*if ($dizin = opendir("deneme2")) {
    while (($file = readdir($dizin))) { //dizin içindekileri okumaya yarar
        echo "$file<br>"; // >deneme2 dizinindeki .txt dosyası yazdırıldı
    }
     closedir($dizin); 
}
*/




//Scandir 
/*$dizin = scandir("deneme2"); //Dizin içindekileri okumak için kullanılır.
foreach ($dizin as $content) {
    echo "$content<br>";
}
*/




//Dosya ya da dizin kontrolü
$dizin = scandir("deneme2"); //Dizin içindekileri okumak için kullanılır.
foreach ($dizin as $content) {
    if (is_file($content)) {
        echo "Dosya: $content<br>";
    }

    if (is_dir($content)) {
        echo "Dizin: $content<br>";
    }
}



//Rename
//rename("deneme2", "deneme3"); Dosya adın yeniden adlandırıldı


?>

