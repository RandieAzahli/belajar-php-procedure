<?php

if (!isset($_COOKIE["username"])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
    <link rel="stylesheet" href="data_siswa.css">
</head>

<body>
    <div class="container">
        <nav>
            <ul>
                <li><a href="data_siswa.php">Data Siswa</a></li>
                <li><a href="nilai_siswa.php">Nilai Siswa</a></li>
                <li><a href="alamat_sekolah.php">Alamat sekolah</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
        <h1>Selamat Datang, <?= $_COOKIE["nama"] . " !"; ?></h1>
        <h3>Data siswa SMKN 13 Bandung</h3>
        <table>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Tempat Tinggal</th>
            </tr>
            <tr>
                <td>01</td>
                <td>Andhika Sitepu</td>
                <td>16</td>
                <td>Medan</td>
            </tr>
            <tr>
                <td>02</td>
                <td>Alex Sumpena</td>
                <td>17</td>
                <td>Bandung</td>
            </tr>
            <tr>
                <td>03</td>
                <td>Stephani Aleza</td>
                <td>17</td>
                <td>Jakarta</td>
            </tr>
            <tr>
                <td>04</td>
                <td>Sheila Pratiwi</td>
                <td>18</td>
                <td>Bogor</td>
            </tr>
        </table>
    </div>
</body>

</html>