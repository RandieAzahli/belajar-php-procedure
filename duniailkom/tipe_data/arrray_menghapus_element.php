<?php

$something = [121, "Joko", 44.99, "Belajar PHP"];
$something[] = "DuniaIlkom";

unset($something[0]);
unset($something[2]);
unset($something[3]);

echo "<pre>";
var_dump($something);
echo "</pre>";