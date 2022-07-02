<?php
    include "connection.php";
    if(isset($_POST['submit'])) {
        $id=$_POST['kode_menu'];
        // $no=$_POST['No'];
        $nama=$_POST['nama_menu'];
        $harga=$_POST['harga'];
        $satuan=$_POST['satuan'];
        $kategori=$_POST['kategori'];
        $status_stok=$_POST['status_stok'];

        mysqli_query($connect, "update tabel_menu set kode_menu='$id', nama_menu='$nama', harga='$harga', satuan='$satuan', kategori='$kategori', status_stok='$status_stok' where kode_menu='$id'") or die (mysql_error());
        header('location:index.php');
    }
?>
