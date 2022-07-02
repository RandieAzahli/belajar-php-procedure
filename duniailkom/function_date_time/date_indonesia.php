<?php 

$nama_hari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"];
$nama_bulan = ["Januari", "februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", 
               "Oktober", "November", "Desember"];

$hari = date("w");
$tanggal = date("j");
$bulan = date("n") - 1;
$tahun = date("Y");

echo "Tanggal hari ini adalah : {$nama_hari[$hari]}, {$tanggal} {$nama_bulan[$bulan]} {$tahun}";

?>