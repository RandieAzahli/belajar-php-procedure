<?php

$hasil1 = (true and false);
var_dump($hasil1);

echo "</br>";

$hasil2 = (true or false);
var_dump($hasil2);

echo "</br>";

$hasil3 = (true xor false);
var_dump($hasil3);

echo "</br>";

$hasil4 = false;
var_dump($hasil4);

echo "</br>";

$hasil5 = (false or true && false);
var_dump($hasil5);

echo "</br>";

$hasil6 = ("duniailkom" and true);
var_dump($hasil6);

echo "</br>";

$hasil7 = ("000" or false);
var_dump($hasil7);