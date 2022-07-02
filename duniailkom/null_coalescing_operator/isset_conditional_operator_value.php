<?php

$_POST["kado"] = "DVD eBook";

$kado = isset($_POST["kado"]) ? $_POST["kado"] : "";
echo $kado;
