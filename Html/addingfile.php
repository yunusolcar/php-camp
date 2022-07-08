<?php

//DOSYA EKLEME FONKSİYONLARI (INCLUDE, INCLUDE ONCE, REQUIRE, REQUIRE_ONCE)
include_once("deneme.php"); //deneme.php dosyasından veri aldık. Once ile sadece 1 kez veri alır. 
//include da belirtilen yolda dosya olmasa dahi kendinden sonraki kodlar 
//işleme devam eder. require da etmez

echo $degisken;

require("deneme.php"); //Sunucuda deneme.php dosyası yoksa kendinden sonraki kodları işleme almaz. Hata verir.

echo $degisken;




?>