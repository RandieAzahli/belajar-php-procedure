<?php 

$hasil = preg_match("/^php/", "belajarphp");
echo $hasil;

echo "</br>";

$hasil = preg_match("/^php/", "belajar php");
echo $hasil;

echo "</br>";

$hasil = preg_match("/^php/", "php itu asyik");
echo $hasil;

echo "</br>";

$hasil = preg_match("/^php/", "aaaaphpaaa");
echo $hasil;

echo "</br>";

$hasil = preg_match("/^php/", "ph..p");
echo $hasil;

echo "</br>";

$hasil = preg_match("/^php/", "phpaaaa");
echo $hasil;

echo "</br>";

$hasil = preg_match("/^(php)/", "belajarphp");
echo $hasil;

?>