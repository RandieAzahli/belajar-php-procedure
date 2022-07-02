<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Superglobals Variable</h1>
    <?php 
        echo "HTTP_HOST = " . $_SERVER["HTTP_HOST"];
        echo "</br>";
        echo "HTTP_USER_AGENT = " . $_SERVER["HTTP_USER_AGENT"];
        echo "</br>";
        echo "SERVER_SOFTWARE = " . $_SERVER["SERVER_SOFTWARE"];
        echo "</br>";
        echo "SERVER_ADDR = " . $_SERVER["SERVER_ADDR"];
        echo "</br>";
        echo "DOCUMENT_ROOT = " . $_SERVER["DOCUMENT_ROOT"];
        echo "</br>";
        echo "SCRIPT_FILENAME = " . $_SERVER["SCRIPT_FILENAME"];
        echo "</br>";
        echo "REQUEST_URI = " . $_SERVER["REQUEST_URI"];
        echo "</br>";
        echo "PHP_SELF = " . $_SERVER["PHP_SELF"];
        echo "</br>";
        echo "SERVER_SIGNATURE = " . $_SERVER["SERVER_SIGNATURE"];
    ?>
</body>
</html>