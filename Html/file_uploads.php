<?php

//DOSYA YÜKLEME // FILE UPLOAD
//encytpe kullanılmazsa dosya ismi tek gider. 
//kullanımı ile dosyanın kendisi de yüklenmektedir. //tmp_name geçici dosya ismi 

//echo $_FILES["file"]["name"]; //dosya adı, bazı indisler (size, name, type, error)
//çıktı > x.png

$file = $_FILES["file"]["tmp_name"];

$newfile = $_FILES["file"]["name"];

if (move_uploaded_file($file, $newfile)) { //move_uploaded ile dosya upload edildi iki parametre alır. ilki dosyanın ismi, 2.si dosyanın yeni ismi
    echo "File uploaded.<br>
    <img src='$newfile' height='100'>
    <br>";
}
else {
    echo "Failed!";
}
?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Php File Upload</title>
    </head>
    <body>
    
        <form method="post" action="file_uploads.php" enctype="multipart/form-data" > 

            Image: <input type="file" name="file" multiple>
            <br><br>
            <input type="submit" name="button" value="Upload">

        </form>
    </body>
</html>