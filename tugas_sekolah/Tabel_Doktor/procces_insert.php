<?php 
    include "connection.php";
    if(isset($_POST['submit'])) {
        $id=$_POST['kode_dokter'];
        $no=$_POST['No'];
        $nama=$_POST['nama_dokter'];
        $alamat=$_POST['alamat'];
        $telepon=$_POST['telepon'];
        $spesialis=$_POST['spesialis'];
        $kode_poli=$_POST['kode_poli'];

        mysqli_query($connect, "insert into tabel_dokter(kode_dokter, No, nama_dokter, alamat, telepon, spesialis, kode_poli) 
        values('$id','$no','$nama','$alamat','$telepon','$spesialis','$kode_poli')") or die (mysql_error());
        $increment1=mysqli_query($connect,"alter table tabel_dokter drop No");
        $increment2=mysqli_query($connect,"alter table tabel_dokter add No int not null auto_increment unique key first");
        header('location:index.php');
    }
?>
