<?php

//Form İşlemleri

$fullname = $_POST["fullname"];

if ($fullname != "") {

            echo "Fullname: " . $fullname;
} else {

?>

            <!doctype html>
            <html>

            <head>
                        <meta charset="utf-8">
                        <title>Php Form Processing</title>
            </head>

            <body>
                        <form method="post" action="get_post.php">
                                    <!-- action ile bu formu hangi php dosyasına gönderebileceğimizi belirtiriz-->
                                    <!-- Post Methodu daha güvenlidir.-->
                                    Fullname: <input type="text" name="fullname">
                                    <br>
                                    <input type="submit" name="btn" value="Send">
                        </form>
            </body>

            </html>
<?php

}
?>