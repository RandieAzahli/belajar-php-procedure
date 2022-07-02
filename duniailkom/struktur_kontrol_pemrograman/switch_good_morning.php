<?php

$user = "alex";

switch ($user) {

    case "joni" :
    case "andi" :
    case "joko" :
    case "alex" :
        echo "Good Morning Boys !";
    break;

    case "ria" :
    case "sari" :
    case "tia" :
    case "nova" :
        echo "Good Morning Ladies !";
    break;

    default :
        echo "Siapakah Anda ?";
    break;
}