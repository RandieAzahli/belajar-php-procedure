<?php

$siswa = ["andi", "gina", "joko", "santi"];

$satu_siswa = next($siswa);
echo $satu_siswa;

echo "</br>";

$satu_siswa = next($siswa);
echo $satu_siswa;

echo "</br>";

$satu_siswa = end($siswa);
echo $satu_siswa;

echo "</br>";

$satu_siswa = reset($siswa);
echo $satu_siswa;