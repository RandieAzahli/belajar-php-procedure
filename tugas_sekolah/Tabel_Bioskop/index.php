<?php 
include "connection.php";
// Ini untuk program Main PHP CRUD yang telah kita buat
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Daftar Pembelian Tiket</title>
 </head>
 <body>
    <h1><center>Database Pendaftaran Bioskop Ujung Berung</center></h1>
        <table border="1" cellpadding="6px" align="center">
            <tr align="center" style="font-size: 18px">
                <td>Kode Tiket</td>
                <td>No</td>
                <td>Tanggal Pembelian</td>
                <td>Nomor Kursi</td>
                <td>Judul Film</td>
                <td>Jadwal Tayang</td>
                <td>Jam Tayang</td>
                <td>Harga Tiket</td>
                <td colspan="2">Tindakan</td>
            </tr>

            <?php 
                $sql="select * from tabel_tiket";
                $check=mysqli_query($connect, $sql) or die (mysqli_error());

                while($result=mysqli_fetch_array($check)) {
                    $id=$result['kode_tiket'];
                        echo "<tr align='center' style='font-size: 18px'>";
                        echo "<td>".$id."</td>";
                        echo "<td>".$result['no']."</td>";
                        echo "<td>".$result['tanggal_pembelian']."</td>";
                        echo "<td>".$result['nomor_kursi']."</td>";
                        echo "<td>".$result['judul_film']."</td>";
                        echo "<td>".$result['jadwal_tayang']."</td>";
                        echo "<td>".$result['jam_tayang']."</td>";
                        echo "<td>".$result['harga_tiket']."</td>";
                        echo "<td><a href=\"procces_delete.php?id=$id\""."onClick=\"return confirm('Hapus Data?')\"".">Delete</a></td>\n";
                        echo "<td><a href=\"edit.php?id=$id\">Edit</a></td>\n";
                        echo "</tr>";
                }
            ?>
 	     </table>
    <center><a href="insert.php">Tambah Data Baru</a></center>
 </body>
 </html>