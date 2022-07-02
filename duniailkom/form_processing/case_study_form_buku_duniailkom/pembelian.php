<?php

if (!isset($_POST["submit"])) {
    header("Location: index.php");
    die();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
    <style>
        body {
            background-color: #F8F8F8;
        }

        .container {
            width: 800px;
            padding: 10px 80px 30px;
            background-color: white;
            margin: 53px auto;
            box-shadow: 1px 0px 10px, -1px 0px 10px;
        }

        h1 {
            text-align: center;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
        }

        th,
        td {
            padding: 8px 18px;
            border: 2px solid black;
            text-align: left;
        }

        th {
            background-color: crimson;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Pembelian Buku Duniailkom</h1>
        <table>
            <tr>
                <th>Nama</th>
                <td><?= $nama ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?= $email; ?></td>
            </tr>
            <tr>
                <th>Buku</th>
                <td><?= $buku; ?></td>
            </tr>
            <tr>
                <th>Jumlah</th>
                <td><?= $jumlah . " buah buku"; ?></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td><?= $alamat; ?></td>
            </tr>
            <tr>
                <th>Kurir Pengiriman</th>
                <td><?= $kurir; ?></td>
            </tr>
            <tr>
                <th>Ongkos Kirim</th>
                <td><?= "Rp. " . number_format($ongkir, 2, ",", "."); ?></td>
            </tr>
            <tr>
                <th>Tanggal Pengiriman</th>
                <td><?= str_pad($tgl, 2, "0", STR_PAD_LEFT) . " - " . str_pad($bln, 2, "0", STR_PAD_LEFT) . " - " . $thn; ?></td>
            </tr>
            <tr>
                <th>Tambahan</th>
                <td><?= "$tambahan_dvd $tambahan_kado"; ?></td>
            </tr>
            <tr>
                <th>Total Biaya</th>
                <td>
                    <?php $total = ($jumlah * 100000) + $ongkir;
                    echo "Rp. " . number_format($total, 2, ",", ".");
                    ?>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>