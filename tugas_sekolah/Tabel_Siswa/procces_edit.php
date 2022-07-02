<?php
    include "connection.php";
    if(isset($_POST['submit'])) {
        $id=$_POST['id_siswa'];
        $nama=$_POST['nama_siswa'];
        $jurusan=$_POST['jurusan'];
        $mapel=$_POST['mata_pelajaran'];

        mysqli_query($connect, "update siswa set id_siswa='$id', nama_siswa='$nama', jurusan='$jurusan', mata_pelajaran='$mapel'
        where id_siswa='$id'") or die (mysql_error());
        header('location:index.php');
    }
?>