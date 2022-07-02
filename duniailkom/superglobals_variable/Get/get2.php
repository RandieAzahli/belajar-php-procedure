<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Superglobals Variable $_GET</h1>
    <?php 
        $nama = $_GET["nama"];
        $alamat = $_GET["alamat"];

        echo "Nama siswa : $nama";
        echo "</br>";
        echo "Alamat siswa : $alamat";
    
    ?>
</body>
</html>