<?php

$hasil = preg_match("/[A-Z]{3}[0-9]{2}/", "AAA01");
echo $hasil;

echo "</br>";

$hasil = preg_match("/[A-Z]{3}[0-9]{2}/", "BCE99");
echo $hasil;

echo "</br>";

$hasil = preg_match("/[A-Z]{3}[0-9]{2}/", "JIK12");
echo $hasil;

echo "</br>";

$hasil = preg_match("/[A-Z]{3}[0-9]{2}/", "aaa01");
echo $hasil;

echo "</br>";

$hasil = preg_match("/[A-Z]{3}[0-9]{2}/", "JIKAA");
echo $hasil;

echo "</br>";

$hasil = preg_match("/[A-Z]{3}[0-9]{2}/", "zzAAA01zz");
echo $hasil;