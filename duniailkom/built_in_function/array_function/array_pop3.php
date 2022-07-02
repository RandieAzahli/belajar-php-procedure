<?php

 $siswa = ["andi", "gina", "joko", "santi"];
 $hasil = [];
 
 while($satu_siswa = array_pop($siswa)) {

    $hasil[] = $satu_siswa;
}

echo "<pre>";
print_r($hasil);
echo "</pre>";