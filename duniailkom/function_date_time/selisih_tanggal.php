<?php

$tgl_satu = strtotime("2-05-2020");
$tgl_dua = strtotime("7-05-2020");

$selisih_tanggal = abs($tgl_dua - $tgl_satu);
echo $selisih_tanggal;

echo "</br>";

$satu_hari = 24 * 60 * 60;

$selisih_hari = $selisih_tanggal / $satu_hari;
echo floor($selisih_hari);