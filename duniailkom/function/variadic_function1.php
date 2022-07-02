<?php

function penambahan() {

    $array_args = func_get_args();
    $jumlah_args = func_num_args();
    $nilai_arg_2 = func_get_arg(1);

    echo "Array Argumen : ";
    print_r($array_args);
    echo "</br>";

    echo "Jumlah Argumen : " . $jumlah_args;
    echo "</br>";

    echo "Nilai argumen ke-2 : " . $nilai_arg_2;
    echo "</br>";
}

penambahan(1, 2, 3);
echo "</br>";
penambahan(5, 4, 3, 2, 1);
echo "</br>";
penambahan(0, 6, 8, 19);