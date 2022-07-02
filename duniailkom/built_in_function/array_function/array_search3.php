<?php

$siswa = ["andi", "gina", "joko", "santi"];

$key = array_search("andi", $siswa);

if ($key !== false) {

    echo "Siswa ada di index ke-$key";
}
else {
    echo "Siswa tidak ditemukan !";
}