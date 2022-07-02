<?php

function penambahan(...$array_args) {

    print_r($array_args);
}

penambahan(1, 2);
echo "</br>";
penambahan(5, 4, 3, 2, 1);
echo "</br>";
penambahan(0, 6, 8, 19);