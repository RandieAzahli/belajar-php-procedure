<?php

$input_angka = 2;

if ($input_angka % 2 == 0) {
    echo $input_angka . " adalah bilangan Genap !";
}
else if ($input_angka % 2 == 1) {
    echo $input_angka . " adalah bilangan Ganjil !";
}
else {
    echo $input_angka . " tidak terdeteksi oleh sistem";
}