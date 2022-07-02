<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>

<body>
    <h1>Session</h1>
    <?php
    echo "Nama : " . $_SESSION["nama"];
    echo "</br>";
    echo "Id : " . $_SESSION["id"];
    echo "</br>";
    echo "Hak akses : " . $_SESSION["hak_akses"];
    ?>
</body>

</html>