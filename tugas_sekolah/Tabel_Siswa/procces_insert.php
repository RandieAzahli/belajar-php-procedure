<?php 
    include "connection.php";

    if(isset($_POST['submit'])) {
        $id=$_POST['id_siswa'];
        $nama=$_POST['nama_siswa'];
        $jurusan=$_POST['jurusan'];
        $mapel=$_POST['mata_pelajaran'];

        mysqli_query($connect, "insert into siswa(id_siswa, nama_siswa, jurusan, mata_pelajaran) 
        values('$id','$nama','$jurusan','$mapel')") or die (mysql_error());
        header('location:index.php');
    }
?>