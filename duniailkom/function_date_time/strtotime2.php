<?php

$tanggal = strtotime("last day of this month");
echo date("d F Y", $tanggal);

echo "</br>";

$tanggal = strtotime("first sunday of may 2022");
echo date("d F Y", $tanggal);

echo "</br>";

$tanggal = strtotime("1 week ago");
echo date("d F Y", $tanggal);

echo "</br>";

$tanggal = strtotime("3 days ago");
echo date("d F Y", $tanggal);

echo "</br>";

$tanggal = strtotime("+1 week 2 days 4 hours 2 seconds");
echo date("d F Y", $tanggal);

echo "</br>";

$tanggal = strtotime("tomorrow");
echo date("d F Y", $tanggal);