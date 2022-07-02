<?php

$hasil = preg_match("/^[A-Z]{1,2} ?[0-9]{1,4} ?[A-Z]{1,3}$/", "BB123ZZZ");
echo $hasil;

echo "</br>";

$hasil = preg_match("/^[A-Z]{1,2} ?[0-9]{1,4} ?[A-Z]{1,3}$/", "D 78 A");
echo $hasil;

echo "</br>";

$hasil = preg_match("/^[A-Z]{1,2} ?[0-9]{1,4} ?[A-Z]{1,3}$/", "B 1 RI");
echo $hasil;

echo "</br>";

$hasil = preg_match("/^[A-Z]{1,2} ?[0-9]{1,4} ?[A-Z]{1,3}$/", "BA9US");
echo $hasil;

echo "</br>";

$hasil = preg_match("/^[A-Z]{1,2} ?[0-9]{1,4} ?[A-Z]{1,3}$/", "BA 9 US");
echo $hasil;