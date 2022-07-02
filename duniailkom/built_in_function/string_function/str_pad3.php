<?php

$a = "123";
$a = str_pad($a, 8, "0", STR_PAD_LEFT);
echo $a;

echo "</br>";

$a = "12345";
$a = str_pad($a, 8, "0", STR_PAD_LEFT);
echo $a;

echo "</br>";

$a = "123456789";
$a = str_pad($a, 8, "0", STR_PAD_LEFT);
echo $a;