<?php

$a = 99;
$b = "Belajar PHP";
$c =& $b;

echo "$a , $b";
echo "</br>";

echo "$a , $c";
echo "</br>";

echo "$a , $b , $c";