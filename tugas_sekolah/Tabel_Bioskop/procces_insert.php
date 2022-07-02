<?php 
    include "connection.php";
    if(isset($_POST['submit'])) {
        $id=$_POST['kode_tiket'];
        $no=$_POST['no'];
        $tanggal_pembelian=$_POST['tanggal_pembelian'];
        $nomor_kursi=$_POST['nomor_kursi'];
        $judul_film=$_POST['judul_film'];
        $jadwal_tayang=$_POST['jadwal_tayang'];
        $jam_tayang=$_POST['jam_tayang'];
        $harga_tiket=$_POST['harga_tiket'];

        mysqli_query($connect, "insert into tabel_tiket(kode_tiket, no, tanggal_pembelian, nomor_kursi, judul_film, jadwal_tayang, jam_tayang, harga_tiket) 
        values('$id','$no','$tanggal_pembelian','$nomor_kursi','$judul_film','$jadwal_tayang','$jam_tayang','$harga_tiket')") or die (mysql_error());
        $increment1=mysqli_query($connect,"alter table tabel_tiket drop no");
        $increment2=mysqli_query($connect,"alter table tabel_tiket add no int not null auto_increment unique key first");
        header('location:index.php');
    }
?>
