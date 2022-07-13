<?php
//File upload Example
//Dosyanın formata uygun olarak yüklenmesini kontrol eden uygulama

$myfile = $_FILES["file"]["tmp_name"];
$name = $_FILES["file"]["name"];

$control = "image/jpeg";

if ($control == $_FILES["file"]["type"]) { //type ile dosya tipinin jpeg desteklemesi gerektiği koşulunu

    if (move_uploaded_file($myfile, $name)) {
        echo "File has been successfully uploaded";
    }
    else {
        echo "The file could not be uploaded!";
    }
}
else {
    echo "Only Jpeg format" . "<hr>";
}



?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Php File Upload</title>
    </head>
    <body>
    
        <form method="post" action="upload_example.php" enctype="multipart/form-data" > 

            Image: <input type="file" name="file">
            <br><br>
            <input type="submit" name="button" value="Upload">

        </form>
    </body>
</html>