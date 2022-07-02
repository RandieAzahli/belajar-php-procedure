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
$query = "UPDATE mahasiswa SET ipk=3.2 WHERE nama='Riana Putriana'";

$result = mysqli_query($conn, $query);
if ($result) {

    if ($jumlah_data = mysqli_affected_rows($conn)) {
        echo "Query berhasil, terdapat $jumlah_data data yang diupdate ...";
    } else {
        echo "Query berhasil, tidak ada data yang diupdate !";
    }
} else {
    die("Query gagal dijalankan : " . mysqli_errno($conn) . " - " . mysqli_error($conn));
}
