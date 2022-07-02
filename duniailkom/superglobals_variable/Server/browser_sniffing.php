<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Superglobals Variable $SERVER</h1>
    <?php 
        $cari = strpos("{$_SERVER["HTTP_USER_AGENT"]}", "Firefox");

        if ($cari != false) {

            echo "Anda mengakses web ini dari Mozilla Firefox";
        }
        else {
            echo "Anda tidak menggunakan web browser Mozilla Firefox";
        }
    
    ?>
</body>
</html>