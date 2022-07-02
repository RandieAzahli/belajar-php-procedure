<?php 
include "connection.php";
// Ini untuk program Main PHP CRUD yang telah kita buat
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Daftar Menu</title>
 </head>
 <body>
    <h1><center>Daftar Menu Cabang Warung UjungBerung</center></h1>
        <table border="1" cellpadding="6px" align="center">
            <tr align="center" style="font-size: 18px">
                <td>Kode Menu</td>
                <td>No</td>
                <td>Nama Menu</td>
                <td>Harga</td>
                <td>Satuan</td>
                <td>Kategori</td>
                <td>Status Stok</td>
                <td colspan="2">Tindakan</td>
            </tr>

            <?php 
                $sql="select * from tabel_menu";
                $check=mysqli_query($connect, $sql) or die (mysqli_error());

                while($result=mysqli_fetch_array($check)) {
                    $id=$result['kode_menu'];
                        echo "<tr align='center' style='font-size: 18px'>";
                        echo "<td>".$id."</td>";
                        echo "<td>".$result['No']."</td>";
                        echo "<td>".$result['nama_menu']."</td>";
                        echo "<td>".$result['harga']."</td>";
                        echo "<td>".$result['satuan']."</td>";
                        echo "<td>".$result['kategori']."</td>";
                        echo "<td>".$result['status_stok']."</td>";
                        echo "<td><a href=\"procces_delete.php?id=$id\""."onClick=\"return confirm('Hapus Data?')\"".">Delete</a></td>\n";
                        echo "<td><a href=\"edit.php?id=$id\">Edit</a></td>\n";
                        echo "</tr>";
                }
            ?>
 	     </table>
    <center><a href="insert.php">Tambah Data Dokter</a></center>
 </body>
 </html>