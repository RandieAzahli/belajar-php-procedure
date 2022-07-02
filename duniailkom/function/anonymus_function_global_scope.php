<?php

$a = "Andi";

$salam = function() {

    global $a;
    return "Selamat Siang, $a !";
};

echo $salam();