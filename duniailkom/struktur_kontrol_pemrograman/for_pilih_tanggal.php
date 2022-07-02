<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <span>Pilih Tanggal : </span>
    
    <select name="tgl">

        <?php for ($i = 1; $i <= 31; ++$i) : ?>

            <?= "<option value=\"$i\"> $i </option>"; ?>

        <?php endfor; ?>

    </select>

    <span>Pilih Bulan : </span>
    
    <select name="bulan">

        <?php for ($i = 1; $i <= 12; ++$i) : ?>

            <?= "<option value=\"$i\"> bulan-$i </option>"; ?>

        <?php endfor; ?>

    </select>

    <span>Pilih Tahun : </span>
    
    <select name="tahun">

        <?php for ($i = 1980; $i <= 2025; ++$i) : ?>

            <?= "<option value=\"$i\"> $i </option>"; ?>

        <?php endfor; ?>

    </select>
</body>
</html>