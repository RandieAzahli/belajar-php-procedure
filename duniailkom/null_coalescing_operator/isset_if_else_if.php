<?php

$prize = "Semua Buku DuniaIlkom";

if (isset($_POST["kado"])) {
    $kado = $_POST["kado"];
} else if (isset($prize)) {
    $kado = $prize;
} else {
    $kado = "";
}
echo $kado;
