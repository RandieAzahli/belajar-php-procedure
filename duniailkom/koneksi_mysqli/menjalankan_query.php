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
$nama = "Jakarta";
$query = "SELECT * FROM mahasiswa WHERE tempat_lahir='$nama'";
$result = mysqli_query($conn, $query);

while ($data = mysqli_fetch_row($result)) {
    echo "$data[0] $data[1] $data[2] $data[3] $data[4] $data[5] $data[6]";
    echo "</br>";
}
