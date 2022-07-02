<?php

$sumber = ["HTML", "CSS", "PHP", "MYSQL", "JavaScipt"];

$hasil_string = implode($sumber);
var_dump($hasil_string);

echo "</br>";

$hasil_string = implode(" ", $sumber);
var_dump($hasil_string);