<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>

    <h2>Daftar Mahasiswa</h2>
    
    <ol>
        <?php for ($i = 1; $i <= 100; $i++) : ?>
            <?php echo "<li>Nama Mahasiswa ke-$i</li>"; ?>
        <?php endfor; ?>
    </ol>
    
</body>
</html>