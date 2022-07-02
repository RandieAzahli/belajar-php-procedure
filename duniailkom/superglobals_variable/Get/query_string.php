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
        $nama = "Alex & Thia";
        $alamat = "Medan & Bandung";
        $umur = 23;

        $query_string = "?nama={$nama}&alamat={$alamat}&umur={$umur}";
    ?>
    <a href="proses.php<?=$query_string ?>">Link menuju halaman Proses</a>
</body>
</html>