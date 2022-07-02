<?php

$db = [
    "host" => "localhost",
    "user" => "root",
    "pass" => "",
    "db"   => "kampusku"
];

$conn = mysqli_connect($db['host'], $db['user'], $db['pass'], $db['db']) or die();
if ($conn) {
    echo "<script>console.log('Koneksi ke database berhasil...')</script>";
}
