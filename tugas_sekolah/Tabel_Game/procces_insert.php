<?php 
    include "connection.php";
    if(isset($_POST['submit'])) {
        $id=$_POST['kode_game'];
        $no=$_POST['no'];
        $nama_game=$_POST['nama_game'];
        $jumlah_barang=$_POST['jumlah_barang'];
        $harga_satuan=$_POST['harga_satuan'];

        mysqli_query($connect, "insert into tabel_game(kode_game, no, nama_game, jumlah_barang, harga_satuan) 
        values('$id','$no','$nama_game','$jumlah_barang','$harga_satuan')") or die (mysql_error());
        $increment1=mysqli_query($connect,"alter table tabel_game drop no");
        $increment2=mysqli_query($connect,"alter table tabel_game add no int not null auto_increment unique key first");
        header('location:index.php');
    }
?>
