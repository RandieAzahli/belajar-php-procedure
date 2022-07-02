<?php

function cari_selisih_tanggal($tgl_awal, $tgl_akhir) {

    $tgl_satu = date_create($tgl_awal);
    $tgl_dua = date_create($tgl_akhir);

    $selisih_tgl = date_diff($tgl_dua, $tgl_satu);

    $selisih = [];
    $selisih["tahun"] = $selisih_tgl->y;
    $selisih["bulan"] = $selisih_tgl->m;
    $selisih["hari"] = $selisih_tgl->d;

    return $selisih;
}

$hasil = Cari_selisih_tanggal("12-10-2020", "27-10-2020");
echo "Selisih tanggal : {$hasil["tahun"]} Tahun {$hasil["bulan"]} Bulan {$hasil["hari"]} Hari";

echo "</br>";

$hasil = Cari_selisih_tanggal("12-10-2020", "27-10-2015");
echo "Selisih tanggal : {$hasil["tahun"]} Tahun {$hasil["bulan"]} Bulan {$hasil["hari"]} Hari";

echo "</br>";

$hasil = Cari_selisih_tanggal("12-10-1955", "now");
echo "Selisih tanggal : {$hasil["tahun"]} Tahun {$hasil["bulan"]} Bulan {$hasil["hari"]} Hari";