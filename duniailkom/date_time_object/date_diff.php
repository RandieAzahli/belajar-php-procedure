<?php

$tgl_satu = date_create("17-08-2020");
$tgl_dua = date_create("19-08-2020");

$selisih = date_diff($tgl_dua, $tgl_satu);

echo "<pre>";
print_r($selisih);
echo "</pre>";