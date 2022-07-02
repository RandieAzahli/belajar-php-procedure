<?php

$user = "guest";

if ($user == "admin") {
    echo "Selamat datang Admin";
}
else if ($user == "guest") {
    echo "Selamat datang Guest";
}
else if ($user == "user") {
    echo "Selamat datang User ";
}
else {
    echo "Maaf, saya tidak mengenal Anda";
}