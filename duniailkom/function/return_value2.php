<?php

function tambah($x, $y) {

    $hasil = $x + $y;

    return $hasil;
}

$a = tambah(12, 12);
$b = tambah($a, 12);

echo $b;