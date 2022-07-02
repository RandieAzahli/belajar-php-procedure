<?php

$nilai = [

    "rudy"  => 81,
    "anton" => 82,
    "rini"  => 95,
];

$cek = array_key_exists("joko", $nilai);
var_dump($cek);

echo "</br>";

$cek = array_key_exists("rudy", $nilai);
var_dump($cek);

if ($cek) {
    
    echo "rudy ada !";
}
else {
    echo "rudy tidak ada !";
}