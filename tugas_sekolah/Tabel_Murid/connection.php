<?php 
// Ini untuk menghubungkan Database dengan PHP yang kita buat
$host="localhost";
$user="root";
$pass="12354321";
$db="db_sekolah";
$connect=mysqli_connect($host, $user, $pass);

if($connect) {
    $try=mysqli_select_db($connect, $db);
        if($try) {
            echo " ";
        }
        else {
            echo mysqli_error();
        }
}

?>