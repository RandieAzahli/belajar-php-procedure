<?php

$username = "admin";
$password = "qwerty";

if ($username == "admin") {

    if ($password == "qwerty") {
        echo "Username dan password sesuai !";
    }

    else {
        echo "Username sesuai, password tidak sesuai !";
    }
}

else if ($password == "qwerty") {
    echo "Username tidak sesuai, password sesuai !";
}

else {
    echo "Username dan password tidak sesuai !";
}
