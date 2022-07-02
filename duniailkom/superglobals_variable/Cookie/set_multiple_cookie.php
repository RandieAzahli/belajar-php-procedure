<?php

setcookie("id", "AAC01", time() + 3600 * 24);
setcookie("nama", "Nurul", time() + 3600 * 24);
setcookie("hak_akses", "admin", time() + 3600 * 24);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Belajar PHP</title>
</head>

<body>
    <h1>Cookie</h1>
    <?php
    echo $_COOKIE["id"];
    echo "</br>";
    echo $_COOKIE["nama"];
    echo "</br>";
    echo $_COOKIE["hak_akses"];
    ?>
</body>

</html>