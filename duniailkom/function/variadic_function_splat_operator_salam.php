<?php

function salam($waktu, ...$siapa) {

    $nama = "";

    foreach ($siapa as $val) {

        $nama = "$nama $val";
    }

    return "Selamat $waktu, $nama !";
}

echo salam("Siang", "Andi", "Rissa", "Alex");