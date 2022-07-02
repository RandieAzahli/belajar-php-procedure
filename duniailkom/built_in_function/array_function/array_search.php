<?php

$siswa = ["andi", "gina", "joko", "santi"];
$key = array_search("joko", $siswa);
var_dump($key);

echo "</br>";

$key = array_search("alex", $siswa);
var_dump($key);