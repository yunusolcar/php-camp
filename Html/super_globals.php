<?php

//Küresel Değişkenler ( Globals, Server, Request, Cookie, Session, Get, Post, Files )
//Globals
function sayHello() {
    echo "<br>Hi " .$GLOBALS["fullname"];
}
$fullname = "Yunus Xxx";
sayHello();



//Server 
echo "<br>IP Adress: " .$_SERVER["REMOTE_ADDR"];

echo "<br>Browser: " .$_SERVER["HTTP_USER_AGENT"];

echo "<br>Server Adress: " .$_SERVER["HTTP_HOST"];

echo "<br>Server IP Adress: " .$_SERVER["SERVER_ADDR"];

echo "<br>Server Name: " .$_SERVER["SERVER_NAME"];

echo "<br>Server Software: " .$_SERVER["SERVER_SOFTWARE"];

echo "<br>Document Adress: " .$_SERVER["DOCUMENT_ROOT"];

echo "<hr>"; //Server ile ilgili sonuçlar



//Request
echo $_REQUEST["fullname"]; //İstek
echo "<hr>";



//Cookie
setcookie("visiterA", "Yunus XXX", time()+360); //Cookie Tarayıcıda saklanır.
echo "Hi ". $_COOKIE["visiter"];
echo "<hr>";



//Session
$_SESSION["visiterB"]= "Dante YYY"; //Session Server side'da saklanır.
echo "Hi ". $_SESSION["visiterB"];
echo "<hr>";



//Get
//e.g ->   index.php=fullname=xxx&age=31&born=1682 
echo "Hi " .$_GET["fullname"];
echo "<hr>";




//Post
echo "Hello " .$_POST["fullname"];

echo "
<form method='post' action='super_globals.php'>
         Name Surname: <input type='text' name='fullname'><br>
         <input type='submit' value='Send'>
</form>
";



//Files
print_r($_FILES);

echo "<hr>
<form method='post' enctype='multipart/form-data' action='super_globals.php'> /
         File: <input type='file' name='file'><br><br>
         <input type='submit' value='Upload'>
</form>
";
//enctype kullanılmazsa dosya değil sadece yazı olarak gider yani geçersiz
?>