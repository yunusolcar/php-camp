<?php

//METİN ŞİFRELEME FONKSİYONLARI - TEXT ENCRYPTION FUNCTIONS (MD5, SHA1, BASE64)

$text = "Yunus Xxx";

echo "MD5 şifreleme: " . md5($text) . "<br>"; //32 hane, 16lık sayı tabanı (0-9)(a - f) ye kadar

echo "SHA1 şifreleme: " . sha1($text) . "<br>"; //40 hane, 16lık sayı tabanı (0-9)(a - f) ye kadar

echo "SHA1 + MD5: " . sha1(md5($text)) . "<br>"; // en güvenlisi

echo "BASE64 şifreleme: " . base64_encode($text) . "<br>";

echo "BASE64 çözme " . base64_decode(base64_encode($text)) . "<br>";


?>