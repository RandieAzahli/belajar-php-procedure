<?php

$a = "a";
$a =  str_pad($a, 8, "#");
var_dump($a);

echo "</br>";

$a = "abc";
$a = str_pad($a, 8, "#");
var_dump($a);

echo "</br>";

$a = "abcde";
$a = str_pad($a, 8, "#");
var_dump($a);

echo "</br>";

$a = "abcdefghij";
$a = str_pad($a, 8, "#");
var_dump($a);