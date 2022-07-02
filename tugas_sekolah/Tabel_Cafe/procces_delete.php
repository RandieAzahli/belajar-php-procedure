<?php
    include "connection.php";
    if(isset($_GET['id'])) {
        $id=$_GET['id'];
        $result=mysqli_query($connect, "delete from tabel_menu where kode_menu='$id'") or die (mysql_error());
        $increment1=mysqli_query($connect,"alter table tabel_menu drop No");
        $increment2=mysqli_query($connect,"alter table tabel_menu add No int not null auto_increment unique key first");
        header('location:index.php');
    }
?>
