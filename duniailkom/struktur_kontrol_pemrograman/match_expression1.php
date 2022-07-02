<?php

$var = 8;

$hasil = match ($var) {

    1 => "Hari Senin",
    2 => "Hari Selasa",
    3 => "Hari Rabu",
    4 => "Hari Kamis",
    5 => "Hari Jum'at",
    6 => "Sabtu",
    7 => "Minggu",
    
    default => "Hari cuman ada 7 !"
};

echo $hasil;