<?php

$db = [

    "host" => "localhost",
    "user" => "root",
    "pass" => "",
    "db"   => "universitas"
];

$conn = mysqli_connect($db['host'], $db['user'], $db['pass']);

if ($conn) {
    $try = mysqli_select_db($conn, $db['db']);

    if (!$try) {
        die("Koneksi ke database gagal ! : " . mysqli_connect_errno() . " - " . mysqli_connect_error());
    }
}
$nim = "15021044";
$query = "SELECT * FROM mahasiswa WHERE nim='$nim'";
$result = mysqli_query($conn, $query);

$jumlah_data = mysqli_num_rows($result);

if ($jumlah_data == 1) {
    echo "Data ditemukan ...";
} else {
    echo "Data tidak ditemukan !";
}
