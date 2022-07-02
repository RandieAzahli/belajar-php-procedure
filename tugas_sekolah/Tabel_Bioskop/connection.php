<?php

$host="localhost";
$user="root";
$pass="12354321";
$db="db_bioskop";
$connect = mysqli_connect($host, $user, $pass);;

if($connect) {
    $try=mysqli_select_db($connect, $db);
        if($try) 
        {
            echo "success !";
        }
        else {
            echo mysqli_error();
        }
}
 ?>
