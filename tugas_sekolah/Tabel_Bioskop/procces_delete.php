<?php
    include "connection.php";
    if(isset($_GET['id'])) {
        $id=$_GET['id'];
        $result=mysqli_query($connect, "delete from tabel_tiket where kode_tiket='$id'") or die (mysql_error());
        $increment1=mysqli_query($connect,"alter table tabel_tiket drop no");
        $increment2=mysqli_query($connect,"alter table tabel_tiket add no int not null auto_increment unique key first");
        header('location:index.php');
    }
?>
