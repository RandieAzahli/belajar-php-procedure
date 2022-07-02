<?php

function ada_ada_saja() {

    return "Teks ini berasal dari function : " . __FUNCTION__;
}

echo "Teks ini berada di baris : " . __LINE__;
echo "</br>";
echo "Alamat lengkap file ini adalah : " . __FILE__;
echo "</br>";
echo "File ini berada di folder : " . __DIR__;
echo "</br>";
echo ada_ada_saja();