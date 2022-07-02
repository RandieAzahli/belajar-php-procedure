<?php

$hasil = preg_match("/php/", "Belajarphp");
echo $hasil;

echo "</br>";

$hasil = preg_match("/php/", "belajarhtml");
echo $hasil;

echo "</br>";

$hasil  = preg_match("/php/", "belajar php");
echo $hasil;

echo "</br>";

$hasil = preg_match("/php/", "php itu asyik");
echo $hasil;

echo "</br>";

$hasil = preg_match("/php/", "sedang serius belajar");
echo $hasil;

echo "</br>";

$hasil = preg_match("/php/", "...ph...p");
echo $hasil;

echo "</br>";

$hasil = preg_match("/php/", "1234php1234");
echo $hasil;