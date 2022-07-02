<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h2>Daftar Peserta</h2>

    <table border="1" cellspacing="0" cellpadding="4">
        <tr>
            <th>No.</td><th>Nama Peserta</td>
        </tr>

        <?php for ($i = 1; $i <= 100; ++$i) : ?>
            <?= "<tr><td>$i</td><td>Nama Peserta $i</td></tr>" ?>
        <?php endfor; ?>
    </table>
</body>
</html>