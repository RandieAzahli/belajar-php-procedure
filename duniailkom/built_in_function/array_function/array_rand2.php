<?php

$siswa = ["andi", "gina", "joko", "santi", "rini", "rika", "joy"];
$key_siswa = array_rand($siswa, 2);

echo "<pre>";
print_r($key_siswa);
echo "</pre>";

echo "</br>";

foreach ($key_siswa as $val) {

    echo $val . "</br>";
}