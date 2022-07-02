<?php

$mimeType_able = ["image/jpeg", "image/gif", "image/png"];
$pesan_err = "";

if (!in_array("audio/mpeg", $mimeType_able)) {
    $pesan_err .= "Mohon upload file gambar (.gif, .png, .jpeg) !";
}

echo $pesan_err;
