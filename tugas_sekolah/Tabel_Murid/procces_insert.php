<?php 
    include "connection.php";
    if(isset($_POST['submit'])) {
        $id=$_POST['nis'];
        $no=$_POST['no'];
        $nama_lengkap=$_POST['nama_lengkap'];
        $kelas=$_POST['kelas'];
        $jurusan=$_POST['jurusan'];

        mysqli_query($connect, "insert into tabel_murid(nis, no, nama_lengkap, kelas, jurusan) 
        values('$id','$no','$nama_lengkap','$kelas','$jurusan')") or die (mysql_error());
        $increment1=mysqli_query($connect,"alter table tabel_murid drop no");
        $increment2=mysqli_query($connect,"alter table tabel_murid add no int not null auto_increment unique key first");
        header('location:index.php');
    }
?>
