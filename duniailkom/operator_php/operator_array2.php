<?php

$kelasA = ["Alex", "Rina", "Rico"];
$kelasB = ["Andri", "Joko", "Sukma", "Rina", "Sari"];

var_dump($kelasA == $kelasB);
echo "</br>";

var_dump($kelasA === $kelasB);
echo "</br>";

var_dump($kelasA != $kelasB);
echo "</br>";

var_dump($kelasA <> $kelasB);
echo "</br>";

var_dump($kelasA !== $kelasB);
echo "</br>";

$semua = $kelasA + $kelasB;
print_r($semua);