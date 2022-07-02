<?php
    include "connection.php";
    if(isset($_GET['id'])) {
        $id=$_GET['id'];
        $result=mysqli_query($connect, "delete from tabel_murid where nis='$id'") or die (mysql_error());
        $increment1=mysqli_query($connect,"alter table tabel_murid drop no");
        $increment2=mysqli_query($connect,"alter table tabel_murid add no int not null auto_increment unique key first");
        header('location:index.php');
    }
?>
