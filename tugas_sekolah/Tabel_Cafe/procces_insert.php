<?php 
    include "connection.php";
    if(isset($_POST['submit'])) {
        $id=$_POST['kode_menu'];
        $no=$_POST['No'];
        $nama=$_POST['nama_menu'];
        $harga=$_POST['harga'];
        $satuan=$_POST['satuan'];
        $kategori=$_POST['kategori'];
        $status_stok=$_POST['status_stok'];

        mysqli_query($connect, "insert into tabel_menu(kode_menu, No, nama_menu, harga, satuan, kategori, status_stok) 
        values('$id','$no','$nama','$harga','$satuan','$kategori','$status_stok')") or die (mysql_error());
        $increment1=mysqli_query($connect,"alter table tabel_menu drop No");
        $increment2=mysqli_query($connect,"alter table tabel_menu add No int not null auto_increment unique key first");
        header('location:index.php');
    }
?>
