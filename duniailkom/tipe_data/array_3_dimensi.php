<?php

$alphabet = [
    [
        ["A"], ["B"]
    ],
    [
        ["C"], ["D"]
    ]
];

echo $alphabet[0][0][0];
echo "</br>";
echo $alphabet[0][1][0];
echo "</br>";
echo $alphabet[1][0][0];
echo "</br>";
echo $alphabet[1][1][0];

echo "<pre>";
print_r($alphabet);
echo "</pre>";