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
    <style>
        ul {
            list-style: none;
            padding: 0;
            margin: 0;
            width: 310px;
        }

        li a {
            display: block;
            background-color: #198C13;
            color: white;
            text-decoration: none;
            font-size: 20px;
            height: 30px;
            line-height: 30px;
            padding-left: 10px;
            border-bottom: 2px solid #FFF;
        }

        li a:hover {
            color: black;
            background-color: #0AED0A;
        }
    </style>
</head>
<body>
    <ul>
        <?php for ($i = 0; $i < count($alamat_link); ++$i) : ?>
            <li><a href="<?= $alamat_link[$i]; ?>"><?= strtoupper($judul_link[$i]); ?></a></li>
        <?php endfor; ?>
    </ul>
</body>
</html>