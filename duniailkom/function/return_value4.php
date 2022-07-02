<?php

function tambah($x, $y) {

    $hasil = $x + $y;

    return $hasil;
    echo "Kalimat ini tidak akan pernah dijalankan ...";
}

echo tambah(12, 12);