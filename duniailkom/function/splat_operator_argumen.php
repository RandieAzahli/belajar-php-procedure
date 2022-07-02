<?php

function salam($waktu, ...$siapa) {

    $nama = "";

    foreach ($siapa as $val) {

        $nama = "$nama $val";
    }

    return "Selamat $waktu, $nama !";
}

$a = ["Siang", "Andri", "Rissa", "Alex"];
echo salam(...$a);