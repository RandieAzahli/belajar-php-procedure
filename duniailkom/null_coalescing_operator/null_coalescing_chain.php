<?php

$prize = "Semua Buku DuniaIlkom";

$kado = $_POST["kado"] ?? $prize ?? "";
echo $kado;
