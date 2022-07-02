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

$nama = "Sa'id Rahmat";
$nama = mysqli_real_escape_string($conn, $nama);
$query = "SELECT * FROM mahasiswa WHERE nama = '$nama'";
$result = mysqli_query($conn, $query);

$jumlah_data = mysqli_num_rows($result);

if ($jumlah_data) {
    echo "data ditemukan !";
} else {
    echo "data tidak ada";
}
