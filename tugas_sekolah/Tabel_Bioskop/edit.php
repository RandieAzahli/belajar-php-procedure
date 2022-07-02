<?php 
    include "connection.php";

    if(isset($_GET['id'])) {
        $id=$_GET['id'];
        $result=mysqli_query($connect,"select * from tabel_tiket where kode_tiket='$id'") or die(mysql_error());
        $row=mysqli_fetch_array($result);

        $id=$row['kode_tiket'];
        $no=$row['no'];
        $tanggal_pembelian=$row['tanggal_pembelian'];
        $nomor_kursi=$row['nomor_kursi'];
        $judul_film=$row['judul_film'];
        $jadwal_tayang=$row['jadwal_tayang'];
        $jam_tayang=$row['jam_tayang'];
        $harga_tiket=$row['harga_tiket'];
    }
    else {
        header('location:insert.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <h1>Edit Data</h1>
    <form action="procces_edit.php" method="POST">
        <table>
            <tr>
                <td>Kode Menu</td>
                <td><input type='text' name='kode_tiket' size='25' value='<?php echo "$id"?>' readonly></td>
            </tr>
            <tr>
                <td>Tanggal Pembelian</td>
                <td><input type='date' size='25' name='tanggal_pembelian' value='<?php echo "$tanggal_pembelian"?>'></td>
            </tr>
            <tr>
                <td>Nomor Kursi</td>
                <td><input type='text' size='25' name='nomor_kursi' value='<?php echo "$nomor_kursi"?>'></td>
            </tr>
            <tr>
                <td>Judul Film</td>
                <td><input type='text' size='25' name='judul_film' value='<?php echo "$judul_film"?>'></td>
            </tr>
            <tr>
                <td>Jadwal Tayang</td>
                <td><input type='date' size='25' name='jadwal_tayang' value='<?php echo "$jadwal_tayang"?>'></td>
            </tr>
            <tr>
                <td>Jam Tayang</td>
                <td><input type='time' size='25' name='jam_tayang' value='<?php echo "$jam_tayang"?>'></td>
            </tr>
            <tr>
                <td>Harga Tiket</td>
                <td><input type='text' size='25' name='harga_tiket' value='<?php echo "$harga_tiket"?>'></td>
            </tr>
            <tr>
                <td colspan="2" align='right'><input type='submit' name='submit' value='Save'></td>
            </tr>
        </table>
    </form>
    <a href="index.php">Home</a>
</body>
</html>
