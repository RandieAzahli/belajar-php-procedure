<?php

function salam($waktu = "Malam" ,$nama = "Anton") {

    return "<p>Selamat $waktu, $nama !</p>";
}

echo salam();
echo salam("Pagi");
echo salam("Datang", "pak Presiden");