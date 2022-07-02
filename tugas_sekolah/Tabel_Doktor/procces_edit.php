<?php
    include "connection.php";
    if(isset($_POST['submit'])) {
        $id=$_POST['kode_dokter'];
        // $no=$_POST['No'];
        $nama=$_POST['nama_dokter'];
        $alamat=$_POST['alamat'];
        $telepon=$_POST['telepon'];
        $spesialis=$_POST['spesialis'];
        $kode_poli=$_POST['kode_poli'];

        mysqli_query($connect, "update tabel_dokter set kode_dokter='$id', nama_dokter='$nama', alamat='$alamat', telepon='$telepon', spesialis='$spesialis', kode_poli='$kode_poli' where kode_dokter='$id'") or die (mysql_error());
        header('location:index.php');
    }
?>
