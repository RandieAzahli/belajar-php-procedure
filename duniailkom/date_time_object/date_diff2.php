<?php

$tgl_satu = date_create("17-08-2020");
$tgl_dua = date_create("19-09-2023");

$selisih = date_diff($tgl_dua, $tgl_satu);

echo $selisih->d;
echo "</br>";
echo $selisih->m;
echo "</br>";
echo $selisih->y;