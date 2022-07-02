<?php 

// array
// variabel yang dapat menampung banyak nilai
// elemen pada array noleh memiliki tipe data yang sama
// pasangan antara key dan value
// key nya adalah index yang dimulai dari 0

// membuat array
// cara lama
$hari = array("Senin","Selasa","Rabu");
// cara baru
$bulan = ["Januari","Februari","Maret"];
$arr1 = [123, "string", false];

// Menampilkan Array
// echo "<pre>";
// print_r($hari);
// echo "</pre>";

// // Menampilkan 1 elemen array
// echo "</br>";
// echo $hari[0];

// echo "</br>";
// echo $bulan[1];
// echo "</br>";

// Menambahkan elemen baru pada array
echo "<pre>";
print_r($hari);
echo "</pre>";
echo "</br>";

$hari[] = "Kamis";
$hari[] = "Jum'at";

echo "<pre>";
print_r($hari);
echo "</pre>";


 ?>