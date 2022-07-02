<?php

session_start();
session_unset();

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
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
    ?>
</body>

</html>