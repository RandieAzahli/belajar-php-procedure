<?php

$tgl_satu = strtotime("12-10-2020");
$tgl_dua = strtotime("9-06-2019");

$selisih_tanggal = abs($tgl_dua - $tgl_satu);

$satu_tahun = 365 * 24 * 60 * 60;
$satu_bulan = 30 * 24 * 60 * 60;
$satu_hari = 24 * 60 * 60;

$selisih_tahun = floor($selisih_tanggal / $satu_tahun);
echo $selisih_tahun . " Tahun "; 

$selisih_bulan = floor(($selisih_tanggal - ($selisih_tahun * $satu_tahun)) / $satu_bulan);
echo $selisih_bulan . " Bulan ";

$selisih_hari = floor(($selisih_tanggal - ($selisih_tahun * $satu_tahun) - ($selisih_bulan * $satu_bulan)) / $satu_hari);
echo $selisih_hari . " Hari";