<?php

//ÇOKLU DOSYA YÜKLEME // MULTIPLE FILE UPLOAD
//En önemli kısım! Birden fazla dosya yüklerken(34.satır) multiple ifadesi kullanılır.
//En önemli kısım! Birden fazla dosya yüklerken (35. satır) ...[] şeklinde tanımlanır.
//tmp name ifadesi de unutulmamalıdır.

foreach ($_FILES["myfile"]["name"] as $i => $name) {
    if (move_uploaded_file($_FILES["myfile"]["tmp_name"][$i], $name)) {

        echo "<b>File Succesfully Uploaded: </b> " . $_FILES["myfile"]["name"][$i];
    }
    else {
        echo "<b>File upload failed! </b>  " . $_FILES["myfile"]["name"][$i];
    }

}

?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset='utf-8'>
        <title>Php Multiple File Upload</title>
    </head>
    <body>
    
        <form method="post" action="multiple_fileuploads.php" enctype="multipart/form-data" > 

            Images : <input type="file" name="myfile[]" multiple> 
            <br><br>
            <input type="submit" name="button" value="Upload">

        </form>
    </body>
</html>