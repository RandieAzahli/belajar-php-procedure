<?php

$test = "";
var_dump(empty($test));

echo "</br>";

$test = 0;
var_dump(empty($test));

echo "</br>";

$test = 0.0;
var_dump(empty($test));

echo "</br>";

$test = "0";
var_dump(empty($test));

echo "</br>";

$test = null;
var_dump(empty($test));

echo "</br>";

$test = false;
var_dump(empty($test));

echo "</br>";

$test = [];
var_dump(empty($test));

echo "</br>";

$test;
var_dump(empty($test));