<?php
    include "connection.php";
    if(isset($_GET['id'])) {
        $id=$_GET['id'];
        $result=mysqli_query($connect, "delete from tabel_dokter where kode_dokter='$id'") or die (mysql_error());
        $increment1=mysqli_query($connect,"alter table tabel_dokter drop No");
        $increment2=mysqli_query($connect,"alter table tabel_dokter add No int not null auto_increment unique key first");
        header('location:index.php');
    }
?>
