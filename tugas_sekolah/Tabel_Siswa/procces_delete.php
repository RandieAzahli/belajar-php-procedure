<?php
    include "connection.php";
    if(isset($_GET['id'])) {
        $id=$_GET['id'];
        $result=mysqli_query($connect, "delete from siswa where id_siswa='$id'") or die (mysql_error());
        header('location:index.php');
    }
?>