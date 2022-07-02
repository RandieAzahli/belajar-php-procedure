<?php

$db = [
    "host" => "localhost",
    "user" => "root",
    "pass" => "",
    "db"   => "universitas"
];

$conn = mysqli_connect($db['host'], $db['user'], $db['pass'], $db['db']);

if ($conn) {
    echo "<script>console.log('Connecting to database... success !')</script>";
} else {
    die();
}

$query = "DROP TABLE IF EXISTS mahasiswa_baru";
$result = mysqli_query($conn, $query);

$query = "CREATE TABLE mahasiswa_baru";
$query .= "(nim char(8), nama varchar(100), tempat_lahir varchar(50), tanggal_lahir date, fakultas varchar(50),";
$query .= "jurusan varchar(50), ipk decimal(3,2), PRIMARY KEY(nim))";

$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query error !");
} else {
    echo "<script>console.log('Query succes !')</script>";
}

$query = "INSERT INTO mahasiswa_baru VALUES";
$query .= "('14005011', 'Riana Putriana', 'Padang', '1996-11-23', 'FMIPA', 'Kimia', 3.1),";
$query .= "('15021044', 'Rudi Permana', 'Bandung', '1994-08-22', 'FASILKOM', 'Ilmu Komputer', 2.9),";
$query .= "('15003036', 'Sari Citra Lestari', 'Jakarta', '1997-12-31', 'Ekonomi', 'Manajemen', 3.5)";

$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query error !");
} else {
    echo "<script>console.log('Query succes !')</script>";
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
        table {
            border-collapse: collapse;
            border: 1.5pt solid black;
        }

        tr,
        th,
        td {
            border: 1.5pt solid black;
            padding: 5px 10px;
        }
    </style>
</head>

<body>
    <h1>Tabel Mahasiswa</h1>
    <table>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Fakultas</th>
            <th>Jurusan</th>
            <th>IPK</th>
        </tr>
        <?php
        $query = "SELECT * FROM mahasiswa_baru";
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>{$row['nim']}</td>";
            echo "<td>{$row['nama']}</td>";
            echo "<td>{$row['tempat_lahir']}</td>";
            echo "<td>{$row['tanggal_lahir']}</td>";
            echo "<td>{$row['fakultas']}</td>";
            echo "<td>{$row['jurusan']}</td>";
            echo "<td>{$row['ipk']}</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>