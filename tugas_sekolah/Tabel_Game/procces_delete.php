<?php
    include "connection.php";
    if(isset($_GET['id'])) {
        $id=$_GET['id'];
        $result=mysqli_query($connect, "delete from tabel_game where kode_game='$id'") or die (mysql_error());
        $increment1=mysqli_query($connect,"alter table tabel_game drop no");
        $increment2=mysqli_query($connect,"alter table tabel_game add no int not null auto_increment unique key first");
        header('location:index.php');
    }
?>
