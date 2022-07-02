<?php

function salam($nama = "Anton") {

    return "<p>Selamat Siang, $nama !</p>";
}

echo salam();
echo salam("Siska");
echo salam("Indonesia");