<?php
    include "connection.php";
    if(isset($_POST['submit'])) {
        $id=$_POST['kode_game'];
        $nama_game=$_POST['nama_game'];
        $jumlah_barang=$_POST['jumlah_barang'];
        $harga_satuan=$_POST['harga_satuan'];

        mysqli_query($connect, "update tabel_game set kode_game='$id', nama_game='$nama_game', jumlah_barang='$jumlah_barang', harga_satuan='$harga_satuan'") or die (mysql_error());
        header('location:index.php');
    }
?>


