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
        echo "Nama : " . $_POST["nama"];
        echo "</br>";
        echo "Email : " . $_POST["email"];
        echo "</br>";
        echo "Belajar : " . $_POST["belajar"];
    ?>
</body>
</html>