<?php 
include "connection.php";
// Ini untuk program Main PHP CRUD yang telah kita buat
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Daftar Game</title>
 </head>
 <body>
    <h1><center>Database Pendaftaran Game Ujung Berung</center></h1>
        <table border="1" cellpadding="6px" align="center">
            <tr align="center" style="font-size: 18px">
                <td>Kode Game</td>
                <td>No</td>
                <td>Nama Game</td>
                <td>Jumlah Barang</td>
                <td>Harga Satuan</td>
                <td colspan="2">Tindakan</td>
            </tr>

            <?php 
                $sql="select * from tabel_game";
                $check=mysqli_query($connect, $sql) or die (mysqli_error());

                while($result=mysqli_fetch_array($check)) {
                    $id=$result['kode_game'];
                        echo "<tr align='center' style='font-size: 18px'>";
                        echo "<td>".$id."</td>";
                        echo "<td>".$result['no']."</td>";
                        echo "<td>".$result['nama_game']."</td>";
                        echo "<td>".$result['jumlah_barang']."</td>";
                        echo "<td>".$result['harga_satuan']."</td>";
                        echo "<td><a href=\"procces_delete.php?id=$id\""."onClick=\"return confirm('Hapus Data?')\"".">Delete</a></td>\n";
                        echo "<td><a href=\"edit.php?id=$id\">Edit</a></td>\n";
                        echo "</tr>";
                }
            ?>
 	     </table>
    <center><a href="insert.php">Tambah Data Baru</a></center>
 </body>
 </html>