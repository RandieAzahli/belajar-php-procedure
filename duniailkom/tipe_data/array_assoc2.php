<?php

$assoc = [
    "satu" => 1000,
    "dua" => "DuniaIlkom",
    4 => "Belajar PHP",
    1000 => "Jadi Programmer"
];

$assoc["baru"] = "Data Baru";
$assoc[99] = "Sembilan puluh sembilan";

$assoc[] = "Ini akan pakai index berapa ?";
$assoc[] = 123456;

echo "<pre>";
print_r($assoc);
echo "</pre>";