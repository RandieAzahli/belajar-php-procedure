<?php

$nilai = [98, 59, 42, 65, 87];
echo array_sum($nilai);
echo "</br>";

$nilai = [9.8, 5.9, 4.2];
echo array_sum($nilai);
echo "</br>";

$nilai = [

    "anton" => 82,
    "rudy" => 81,
    "rini" => 95
];

echo array_sum($nilai) / count($nilai);