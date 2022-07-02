<?php

echo date("d M Y", mktime(00, 00, 00, 8, 17, 2020));
echo "</br>";
echo date("d M Y", strtotime("17-08-2020"));

echo "</br>";

echo date("d M Y, H:i:s A", mktime(10, 30, 59, 4, 21, 2020));
echo "</br>";
echo date("d M Y, H:i:s A", strtotime("21-04-2020 10:30:59"));