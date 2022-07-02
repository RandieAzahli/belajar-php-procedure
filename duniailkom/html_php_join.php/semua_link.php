<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <?php 
        echo "<a href=home.php>Link ke halaman home</a>";
        echo "</br>";
        echo "<a href='home.php'>Link ke halaman home</a>";
        echo "</br>";
        echo "<a href=\"home.php\">Link ke halaman home</a>";
        echo "</br>";
        echo '<a href="home.php">Link ke halaman home</a>';
        echo "</br>";
    ?>

    <a href="<?= "home.php" ?>">Link ke halaman home</a>
</body>
</html>