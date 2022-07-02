<?php

$fileType_able = ["jpg", "gif", "png"];
$file_name = "background1.mp3";
$file_info = pathinfo($file_name);
$pesan_err = "";

if (!in_array($file_info["extension"], $fileType_able)) {
    $pesan_err .= "Mohon upload file gambar (.gif, .jpg, .png) !";
}
echo $pesan_err;
