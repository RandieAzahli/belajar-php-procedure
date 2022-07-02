<?php

function tambah($x, $y) {

    $hasil = $x + $y;

    return $hasil;
}

echo tambah(5, 7);
echo "</br>";

echo "Hasil dari 6 + 9 adalah " . tambah(6, 9);
echo "</br>";

echo tambah(99, 1) . " bisa didapat dari 99 + 1";