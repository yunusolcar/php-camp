<?php

//DOSYA İŞLEMLERİ - CREATE

/* $file = "test.txt"; touch($file); //touch; Sunucuda aynı konumda bu dosyayı oluştururç
 if (touch($file, time() - 3600, time() - 3600)) { //2. parametre son değişiklik zamanını 1 saat öncesine ayarlar. 3. parametre son erişim zamanının ayarlanması
 echo "File created!"; } else {
 echo "Error: File not created!"; } */


//fopen fclose >Bir dosya açıldığında mutlaka geri de kapatılmalıdır. Yoksa performans kaybı ortaya çıkar.
//ya da açık olmayan dosyanın kapatılması hatalara yol açabilir.

$file1 = fopen("test.txt", "w"); //bir dosya açıldığında dosya açma kipi kullanılmalı(2.parametre)
//r kipi dosyayı okuma amacıyla açar.
//r+ kipi dosyayı okuma ve yazma amacıyla açar.
//w , w+ yazma amacıyla açar. Sıfırdan her seferinde yazmak için w
//a , a+ yazma amacıyla acıp eğer yoksa oluşturmak için kullanılır.
//x, x+ yazma amacıyla açar.
//b binary(ikili) düzende açar. Bu sayede işletim sistemleri arasındaki farklılıklar yokulur
//w windows sistemlerde diğer kiplerden biriyle kullanılır. (wbt)
//t text kipi

//Bir dosyaya veri yazmak ya da eklenti yapmak için fwrite ya da fputs fonksiyonu yazılır. Aralarında hiçbir fark yok

fwrite($file1, "First Row.\n");

fputs($file1, "\tSecond Row");

fclose($file1);



$names = array("Penny", "Adam", "Isla", "Watson");

$point = 1;
$file = fopen("nameTest.txt", "wbt"); //wbt = windows + binary + text kipi

foreach ($names as $name) {
    fwrite($file, "$point.\t$name\n");
    $point++;
}
fclose($file);

?>