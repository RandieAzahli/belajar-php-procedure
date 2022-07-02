<?php

$username = "admin";
$password = "qwerty";

if ($username == "admin" && $password == "qwerty") {
    echo "Username dan password sesuai, hak akses diberikan !";
}

else if ($username != "admin" && $password == "qwerty") {
    echo "Username tidak sesuai, password sesuai !";
}

else if ( $username == "admin" && $password != "qwerty") {
    echo "Username sesuai, password tidak sesuai !";
}

else {
    echo "Username dan password tidak sesuai !";
}