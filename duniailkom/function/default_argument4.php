<?php

function salam($waktu, $nama = "Anton") {

    return "<p>Selamat $waktu, $nama !</p>";
}

echo salam("Sore");
echo salam("Pagi");
echo salam("Datang", "Randy");
echo salam();