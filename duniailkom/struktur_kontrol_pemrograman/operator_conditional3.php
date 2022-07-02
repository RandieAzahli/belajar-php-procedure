<?php

$user = "admin";

function salam($user_log) {

    global $user;
    $hasil = ($user == $user_log) ? "Welcome Admin !" : "Maaf, anda bukan Admin !";

    return $hasil;
}

echo salam("admin");