<?php

$host="localhost";
$user="root";
$pass="";
$db="db_apotek";
$connect = mysqli_connect($hots,$user,$pass,$b);

if($connect) {
    $try=mysqli_select_db($connect, $db);
        if($try) {
            echo "succes ";
        }
        else {
            echo "Failed";
            echo mysqli_error($connect);
        }
}
 ?>
