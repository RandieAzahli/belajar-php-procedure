<?php

function penambahan() {

    $array_args = func_get_args();
    $hasil = 0;

    foreach($array_args as $val) {

        $hasil = $hasil + $val;
    }

    return $hasil;
}

echo penambahan(1, 2);
echo "</br>";
echo penambahan(5, 4, 3, 2, 1);
echo "</br>";
echo penambahan(0, 6, 8, 19);