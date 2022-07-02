<?php
    include "connection.php";
    if(isset($_POST['submit'])) {
        $id=$_POST['kode_tiket'];
        $tanggal_pembelian=$_POST['tanggal_pembelian'];
        $nomor_kursi=$_POST['nomor_kursi'];
        $judul_film=$_POST['judul_film'];
        $jadwal_tayang=$_POST['jadwal_tayang'];
        $jam_tayang=$_POST['jam_tayang'];
        $harga_tiket=$_POST['harga_tiket'];

        mysqli_query($connect, "update tabel_tiket set kode_tiket='$id', tanggal_pembelian='$tanggal_pembelian', nomor_kursi='$nomor_kursi', judul_film='$judul_film', jadwal_tayang='$jadwal_tayang', jam_tayang='$jam_tayang', harga_tiket='$harga_tiket' where kode_tiket='$id'") or die (mysql_error());
        header('location:index.php');
    }
?>
