<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Query String</h1>
    <?php 
        $alamat_folder = rawurlencode("proses.php");
        $nama = urlencode("Ria Amelia & Echa Putri");
        $alamat = urlencode("Jakarta Selatan");
        $umur = 23;

        $url = "{$alamat_folder}?nama={$nama}&alamat={$alamat}&umur={$umur}";
        echo $url;
        echo "</br>";
    ?>
    <a href="<?=$url;?>">Link menuju halaman Proses</a>
</body>
</html>