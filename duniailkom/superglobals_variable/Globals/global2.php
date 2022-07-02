<?php

$hari = "Senin";

function nama_hari() {

    $GLOBALS["hari"] = "Jum'at";
}   

nama_hari();
echo $hari;