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
$query = "INSERT INTO mahasiswa VALUES  
          ('14021022', 'Surya Permata', 'Ambon', '1996-11-06', 'FASILKOM', 'Ilmu Komputer', 2.8)";

$result = mysqli_query($conn, $query);
if ($result) {
    echo "Data baru sukses ditambahkan";
} else {
    die("Query gagal dijalankan : " . mysqli_errno($conn) . " - " . mysqli_error($conn));
}
