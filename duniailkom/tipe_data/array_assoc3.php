<?php

$siswa = array(

    "kelas_x" => ["Santi", "Yanto", "Reza", ],
    "kelas_xi" => ["Tia", "Siska", "Nova",] ,
    "kelas_xii" => ["Robert", "Rudy", "Alex", ],
);

echo $siswa["kelas_xi"][0];
echo "</br>";
echo $siswa["kelas_xii"][2];
echo "</br>";
echo $siswa["kelas_x"][1];
echo "</br>";

echo "<pre>";
print_r($siswa);
echo "</pre>";