<?php

function pangkat($nilai_dasar, $nilai_pangkat) {

   $hasil = 1;

   for ($i = 1; $i <= $nilai_pangkat; ++$i) {

        $hasil = $hasil * $nilai_dasar;
   }

   return $hasil;
}

echo pangkat(1.2, 2);
echo "</br>";
echo pangkat(3.7, 3);
echo "</br>";
echo pangkat(5.12, 4);