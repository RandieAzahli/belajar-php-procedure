<?php 

$siswa = array(

    "siswa1" => ["Joko", "Medan", "12 Agustus 1998"],
    "siswa2" => ["Rini", "Jakarta", "22 Juli 1999"],
    "siswa3" => ["Joy", "Samarinda", "4 Maret 1998"],
    "siswa4" => ["alex", "Palembang", "12 Desember 1999"],
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
    <style>
        table {
            border-collapse: collapse;
            border-spacing: 0;
            font-size: 18px;
        }

        table th {
            padding: 10px;
            color: #fff;
            background-color: #2A72BA;
            border-top: 1px solid black;
            border-bottom: 1px solid black;
        }

        table td {
            padding: 10px;
            border-top: 1px solid black;
            border-bottom: 1px solid black;
        }

        tr:nth-child(even) {
            background-color: #DFEBF8;
        }
    </style>
</head>
<body>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
        </tr>   
        <?php $i = 1; ?>
        <?php foreach ($siswa as $val) : ?>
            <?php if ($val[0] == "alex") : ?>
                <tr>
                    <td><b><?= str_pad($i, 2, "0", STR_PAD_LEFT); ?></b></td>
                    <td><b><?= strtoupper($val[0]); ?></b></td>
                    <td><b><?= strtolower($val[1]); ?></b></td>
                    <td><b><?= $val[2]; ?></b></td>
                </tr>
            <?php else :?>
                <tr>
                    <td><?= str_pad($i, 2, "0", STR_PAD_LEFT); ?></td>
                    <td><?= strtoupper($val[0]); ?></td>
                    <td><?= strtolower($val[1]); ?></td>
                    <td><?= $val[2]; ?></td>
                </tr>
            <?php endif; ?>
        <?php ++$i; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>