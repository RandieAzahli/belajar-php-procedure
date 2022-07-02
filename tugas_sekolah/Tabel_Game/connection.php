<?php

$host="localhost";
$user="root";
$pass="12354321";
$db="db_game";
$connect=mysqli_connect($host, $user, $pass);

if($connect) {
    $try=mysqli_select_db($connect, $db);
        if($try) {
            echo " ";
        }
        else {
            echo "Failed";
            echo mysqli_error();
        }
}
 ?>
