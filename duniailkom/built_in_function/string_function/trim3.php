<?php

$a = "__1234_";
echo trim($a, "_");
echo "</br>";
echo ltrim($a, "_");
echo "</br>";
echo rtrim($a, "_");
echo "</br>";

$b = "##-Belajar PHP---##--";
echo trim($b, "#-");
echo "</br>";
echo ltrim($b, "#-");
echo "</br>";
echo rtrim($b, "#-");