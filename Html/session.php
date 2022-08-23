<?php

//Oturum (Session) İşlemleri
session_start(); //!!!bir session oluşturabilmek ya da daha sonra ulaşabilmek için mutlaka en başa session_start ifadesi yazılmalıdır.

$_SESSION["book"] = "NUTUK";
$_SESSION["year"] = "1927";

echo "Book Name: " .$_SESSION["book"]. "<br>"."Released Year: ". $_SESSION["year"];

if(isset($_SESSION["bosok"])){
            echo "Book Found";
} 

unset($_SESSION["book"], $_SESSION["year"]); //unset ile belirtilen oturumlar silinir.
session_destroy(); //bütün sessionlar imha edilir.

?>