<?php

$file_name = "lagu.mp3";
$file_info = pathinfo($file_name);
echo $file_info["extension"];
