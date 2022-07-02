<?php

// setcookie("bulan", "null", time() - 60);

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
    <h1>Cookie</h1>
    <?php
    if (isset($_COOKIE["bulan"])) {
        echo "Isi dari cookie 'bulan' adalah : " . $_COOKIE["bulan"];
    } else {
        echo "Cookie 'bulan' belum ada ...";
    }
    ?>
</body>

</html>