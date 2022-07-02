<?php

$_POST["kado"] = "DVD eBook";

if (isset($_POST["kado"])) {
    $kado = $_POST["kado"];
} else {
    $kado = "";
}
echo $kado;
