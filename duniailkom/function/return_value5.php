<?php

function tambah_kurang($x, $y) {

    $hasil = [];
    
    $hasil[] = $x + $y;
    $hasil[] = $x - $y;

    return $hasil;
}

echo tambah_kurang(12,12)[0];
echo "</br>";
echo tambah_kurang(12,12)[1];
echo "</br>";

$a = tambah_kurang(20, 10);

echo $a[0];
echo "</br>";
echo $a[1];