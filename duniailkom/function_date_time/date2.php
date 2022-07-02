<?php 

$minggu_depan = time() + (7 * 24 * 60 * 60);
echo date("d m Y", $minggu_depan);

echo "</br>";

$kemarin = time() + (1 * 24 * 60 * 60);
echo date("d m Y", $kemarin);

?>