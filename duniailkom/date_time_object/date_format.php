<?php

$tanggal = date_create("17-08-2020");
echo date_format($tanggal, "d M Y");

echo "</br>";

$tanggal = date_create("21-04-2020 10:30:59");
echo date_format($tanggal, "d M Y, H:i:s A");

echo "</br>";

$tanggal = date_create("next week");
echo date_format($tanggal, "d M Y");