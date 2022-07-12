<?php

//FORM İŞLEMLERİ (GET, POST)

$fullname = $_POST["fullname"];

if (isset($fullname)) {
    echo "Fullname: $fullname";
}
else {
    //post daha güvenli. Çünkü get ile arama çubuğunda bilgiler açık olarak gösterilmekte

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Php Form Handling</title>
    </head>
    <body>
    
        <form method="post" action="form.php">

            Full Name: <input type="text" name="fullname">
            <br><br>
            <input type="submit" name="button" value="Send">

        </form>
    </body>
</html>
<?php
}
?>