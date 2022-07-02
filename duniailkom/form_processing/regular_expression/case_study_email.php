<?php

$hasil = preg_match("/.+@.+\..+/", "test");
echo $hasil;

echo "</br>";

$hasil = preg_match("/.+@.+\..+/", "test@");
echo $hasil;

echo "</br>";

$hasil = preg_match("/.+@.+\..+/", "test@hehe");
echo $hasil;

echo "</br>";

$hasil = preg_match("/.+@.+\..+/", "a@a.a");
echo $hasil;

echo "</br>";

$hasil = preg_match("/.+@.+\..+/", "j0n1@d1sin1.bagus");
echo $hasil;

echo "</br>";

$hasil = preg_match("/.+@.+\..+/", "01@00.01");
echo $hasil;

echo "</br>";

$hasil = preg_match("/.+@.+\..+/", "s@hehe.com.net.org");
echo $hasil;