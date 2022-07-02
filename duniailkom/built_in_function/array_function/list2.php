<?php

$mahasiswa = array(

    ["01", "Joko", "Akutansi"],
    ["02", "Nona", "Psikologi"],
    ["03", "Lestya", "Matematika"],
    ["04", "Tasya", "Kedokteran"],
);

while (list($no, $nama, $jurusan) = array_shift($mahasiswa)) {

    echo "$no $nama $jurusan </br>";
}