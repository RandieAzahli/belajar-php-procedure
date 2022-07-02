<?php

$hari = "Senin";

function nama_hari() {

    global $hari;
    return "Sekarang hari $hari";
}

echo nama_hari();