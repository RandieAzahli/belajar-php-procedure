<?php

function salam($waktu, $nama) {

    return "<p>Selamat $waktu, $nama !</p>";
}

echo salam("Malam", "Andi");
echo salam("Siang", "Jojo");
echo salam("Pagi", "Indonesia");