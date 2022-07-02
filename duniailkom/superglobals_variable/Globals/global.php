<?php

$hari = "Senin";

function nama_hari() {

    return "Sekarang hari " . $GLOBALS["hari"];
}

echo nama_hari();