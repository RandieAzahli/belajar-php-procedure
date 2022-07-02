<?php

$a = "Andi";

$salam = function() {

    global $a;
    echo "Selamat Siang, $a !";
    echo "</br>";

    $a = "Rissa";
    echo "Selamat Siang, $a !";
    echo "</br>";
};

$salam();
echo "Selamat Siang, $a !";
