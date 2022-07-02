<?php
    include "connection.php";
    if(isset($_POST['submit'])) {
        $id=$_POST['nis'];
        $nama_lengkap=$_POST['nama_lengkap'];
        $kelas=$_POST['kelas'];
        $jurusan=$_POST['jurusan'];

        mysqli_query($connect, "update tabel_murid set nis='$id', nama_lengkap='$nama_lengkap', kelas='$kelas', jurusan='$jurusan'") or die (mysql_error());
        header('location:index.php');
    }
?>


