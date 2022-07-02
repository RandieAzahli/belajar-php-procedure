<?php

$siswa = ["andi", "gina", "joko", "santi", "rini", "rika", "joy"];
$key_siswa = array_rand($siswa);

echo $key_siswa;
echo "</br>";
echo $siswa[$key_siswa];