<?php

// buat koneksi ke database
$db = [
    "host" => "localhost",
    "user" => "root",
    "pass" => "",
    "db" => "",
];

$conn = mysqli_connect($db['host'], $db['user'], $db['pass']) or die();
if ($conn) {
    echo "<script>console.log('Koneksi ke database berhasil...')</script>";
}

// membuat database
$db['db'] = "kampusku";
$query = "CREATE DATABASE IF NOT EXISTS {$db['db']}";
$result = mysqli_query($conn, $query);
if ($result) {
    echo "<script>console.log('Database kampusku berhasil dibuat...')</script>";
}

// memilih database
$result = mysqli_select_db($conn, $db['db']);

// cek apakah tabel mahasiswa sudah ada. jika ada, hapus tabel.
$query = "DROP TABLE IF EXISTS mahasiswa";
$result = mysqli_query($conn, $query);

// buat query untuk CREATE tabel mahasiswa
$query = "CREATE TABLE mahasiswa (nim char(8), nama varchar(100), tempat_lahir varchar(50), tanggal_lahir date,";
$query .= "fakultas varchar(50), jurusan varchar(50), ipk decimal(3,2), PRIMARY KEY (nim))";
$result = mysqli_query($conn, $query);
if ($result) {
    echo "<script>console.log('Tabel mahasiswa berhasil dibuat...')</script>";
}

// buat query INSERT data ke tabel mahasiswa
$query = "INSERT INTO mahasiswa VALUES";
$query .= "('14005011', 'Riana Putriana', 'Padang', '1996-11-23', 'FMIPA', 'Kimia', 3.1),";
$query .= "('15021044', 'Rudi Permana', 'Bandung', '1994-08-22', 'FASILKOM', 'Ilmu Komputer', 2.9),";
$query .= "('15003036', 'Sari Citra Lestari', 'Jakarta', '1997-12-31', 'Ekonomi', 'Manajemen', 3.5),";
$query .= "('15002032', 'Rina Kumala Sari', 'Jakarta', '1997-06-28', 'Ekonomi', 'Akuntansi', 3.4),";
$query .= "('13012012', 'James Situmorang', 'Medan', '1995-04-02', 'Kedokteran', 'Dokter gigi', 2.7)";
$result = mysqli_query($conn, $query);
if ($result) {
    echo "<script>console.log('Memasukan data pada tabel mahasiswa...')</script>";
}

// cek apakah tabel admin sudah ada. Jika ada, hapus
$query = "DROP TABLE IF EXISTS admin";
$result = mysqli_query($conn, $query);

// buat query untuk CREATE tabel admin
$query = "CREATE TABLE admin (username varchar(50), password char(40))";
$result = mysqli_query($conn, $query);
if ($result) {
    echo "<script>console.log('Tabel admin berhasil dibuat...')</script>";
}

// buat username dan password untuk admin
$username = "admin123";
$password = sha1("rahasia");

// buat query untuk INSERT data ke tabel admin
$query = "INSERT INTO admin VALUES ('$username', '$password')";
$result = mysqli_query($conn, $query);
if ($result) {
    echo "<script>console.log('Memasukan data pada tabel admin...')</script>";
}
