<?php

function salam($waktu, $nama) {

    return "<p>Selamat $waktu, $nama !</p>";
}

$event = "Belajar PHP";
$user = "Andi";

echo salam($event, $user);