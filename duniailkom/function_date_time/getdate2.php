<?php

$merdeka = getdate(mktime(10, 00, 00, 8, 17, 1945));
echo "<pre>";
print_r($merdeka);
echo "</pre>";

echo "Tanggal : {$merdeka["mday"]}-{$merdeka["mon"]}-{$merdeka["year"]}"; 