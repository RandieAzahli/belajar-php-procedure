<?php

function cari_selisih_tanggal($tgl_awal, $tgl_akhir) {

$tgl_satu = strtotime($tgl_awal);
$tgl_dua = strtotime($tgl_akhir);

$selisih_tanggal = abs($tgl_dua - $tgl_satu);

$satu_tahun = 365 * 24 * 60 * 60;
$satu_bulan = 30 * 24 * 60 * 60;
$satu_hari = 24 * 60 * 60;

$selisih = [];

$selisih["tahun"] = floor($selisih_tanggal / $satu_tahun); 

$selisih["bulan"] = floor(($selisih_tanggal - ($selisih["tahun"] * $satu_tahun)) / $satu_bulan);

$selisih["hari"] = floor(($selisih_tanggal - ($selisih["tahun"] * $satu_tahun) - ($selisih["bulan"] * $satu_bulan)) / $satu_hari);

    return $selisih;
}

