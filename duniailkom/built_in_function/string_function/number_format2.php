<?php

$harga = "354500.89";

$harga_format = "Rp. " . number_format($harga, 2, ",", ".") . ";-";
echo "Harga barang ini adalah " . $harga_format;