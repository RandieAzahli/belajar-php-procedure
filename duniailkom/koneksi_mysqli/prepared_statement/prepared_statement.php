<?php

$db = [
    "host" => "localhost",
    "user" => "root",
    "pass" => "",
    "mydb" => "universitas"
];

$conn = mysqli_connect($db['host'], $db['user'], $db['pass'], $db['mydb']);
if ($conn) {
    echo "<script>console.log('Koneksi ke database berhasil ...')</script>";
}

// data yg dibutuhkan
$nama = "Riana Putriana";
$ipk = 3.20;

// prepare
$query = "SELECT * FROM mahasiswa WHERE nama = ? AND ipk = ?";
$stmt = mysqli_prepare($conn, $query);

// bind
mysqli_stmt_bind_param($stmt, "sd", $nama, $ipk);

// exexute
$check = mysqli_stmt_execute($stmt);
if ($check) {
    echo "<script>console.log('Query berhasil ...')</script>";
}

// data finish
$result = mysqli_stmt_get_result($stmt);
while ($data = mysqli_fetch_row($result)) {
    echo "$data[0] $data[1] $data[2] $data[3] $data[4] $data[5] $data[6]";
    echo "</br>";
}

$jumlah_data = mysqli_num_rows($result);
echo "Jumlah data : $jumlah_data";
