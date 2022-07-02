<?php

$angka_nol = 0;
$angka_int = 12;
$angka_float = 99.75;
$bool_true = true;
$bool_false = false;
$array_isi = ["A", "B", "C"];
$null = null;
$object = new stdClass;
$resource = fopen("type_casting_int.php", "r");

$angka_nol = (bool) $angka_nol;
var_dump($angka_nol);
echo "</br>";

$angka_int = (bool) $angka_int;
var_dump($angka_int);
echo "</br>";

$angka_float = (bool) $angka_float;
var_dump($angka_float);
echo "</br>";

$bool_true = (bool) $bool_true;
var_dump($bool_true);
echo "</br>";

$bool_false = (bool) $bool_false;
var_dump($bool_false);
echo "</br>";

$array_isi = (bool) $array_isi;
var_dump($array_isi);
echo "</br>";

$null = (bool) $null;
var_dump($null);
echo "</br>";

$object = (bool) $object;
var_dump($object);
echo "</br>";

$resource = (bool) $resource;
var_dump($resource);