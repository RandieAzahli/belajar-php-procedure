<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halaman Proses</h1>
    <?php 
        echo "Nama : " . $_GET["nama"];
        echo "</br>";
        echo "Alamat : " . $_GET["alamat"];
        echo "</br>";
        echo "Umur : " . $_GET["umur"];
    ?>
</body>
</html>