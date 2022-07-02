<?php 
    include "connection.php";
    // Ini untuk program Main PHP CRUD yang telah kita buat
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar siswa</title>
</head>
<body>
    <h1><center>Daftar Siswa Cabang Cinambo</center></h1>
        <table border="1" cellpadding="6px" align="center">
            <tr align="center" style="font-size: 18px">
                <td>id</td>
                <td>Nama Siswa</td>
                <td>Jurusan</td>
                <td>Mata Pelajaran</td>
                <td colspan="2">Tindakan</td>
            </tr>

            <?php 
                $sql="select * from siswa";
                $check=mysqli_query($connect, $sql) or die (mysqli_error());

                while($result=mysqli_fetch_array($check)) {
                    $id=$result['id_siswa'];
                        echo "<tr align='center' style='font-size: 18px'>";
                        echo "<td>".$id."</td>";
                        echo "<td>".$result['nama_siswa']."</td>";
                        echo "<td>".$result['jurusan']."</td>";
                        echo "<td>".$result['mata_pelajaran']."</td>";
                        echo "<td><a href=\"procces_delete.php?id=$id\""."onClick=\"return confirm('Hapus Data?')\"".">Delete</a></td>\n";
                        echo "<td><a href=\"edit.php?id=$id\">Edit</a></td>\n";
                        echo "</tr>";
                }
            ?>
        </table>
    <center><a href="insert.php">Tambah Data siswa</a></center>
</body>
</html>