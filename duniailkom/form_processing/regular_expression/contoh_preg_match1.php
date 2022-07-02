<?php

$hasil = preg_match("/[0-9]{5}/", "abcde");
echo $hasil;

echo "</br>";

$hasil = preg_match("/[0-9]{5}/", "12345");
echo $hasil;