<?php 

$alamat_link = ["home.php", "kategori.php", "artikel.php", "shop.php", "login.php"];
$judul_link = ["Link ke halaman Home", "Link ke halaman Kategori", "Link ke halaman Artikel", "Link ke halaman Shop", "Link ke halaman Login"];

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
    <a href="<?= $alamat_link[0]; ?>"><?= $judul_link[0]; ?></a><br>
</body>
</html>