<?php

function salam($waktu, $nama) {

    return "<p>Selamat $waktu, $nama !</p>";
}

echo salam("Pagi", null);
echo salam("", "Joko");