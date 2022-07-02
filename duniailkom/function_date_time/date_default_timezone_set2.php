<?php

date_default_timezone_set("Asia/Jakarta");
echo "Waktu WIB : " . date("d - m - Y, H:i:s");

echo "</br>";

date_default_timezone_set("Asia/Makassar");
echo "Waktu WITA : " . date("d - m - Y, H:i:s");

echo "</br>";

date_default_timezone_set("Asia/Jayapura");
echo "Waktu WIT : " . date("d - m - Y, H:i:s");

echo "</br>";

echo date_default_timezone_get();