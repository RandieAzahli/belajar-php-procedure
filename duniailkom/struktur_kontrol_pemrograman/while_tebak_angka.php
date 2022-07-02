<?php

function tebak_angka($tebak_angka) {

    $salah = true;

    while ($salah) {

        if($tebak_angka == 8) {

            echo "Anda benar !";
            $salah = false;
        }
        else {
            echo "Anda salah ! silahkan coba lagi !";
            $salah = false;
        }
    }

    return $salah;
}

tebak_angka(5);