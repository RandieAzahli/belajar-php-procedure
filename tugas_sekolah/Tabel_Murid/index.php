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
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="GET">
        <div>
            <label for="sel1">Kata Kunci:</label>
            <?php
            $kata_kunci="";
            if (isset($_GET['kata_kunci'])) {
                $kata_kunci=$_GET['kata_kunci'];
            } ?>
            <input type="text" name="kata_kunci" value="<?php echo $kata_kunci;?>" />
        </div>
        <div>
            <input type="submit" value="Cari">
        </div>
        </form>

    <table border="1" cellspacing="0" cellpadding=3>
        <br>
        <thead>
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama Lengkap</th>
            <th>kelas</th>
            <th>Jurusan</th>

        </tr>
        </thead>
        <?php

        include "connection.php";
        if (isset($_GET['kata_kunci'])) {
            $kata_kunci=trim($_GET['kata_kunci']);
            $sql="select * from tabel_murid where nama_lengkap like '%".$kata_kunci."%' order by nis asc";

        }else {
            $sql="select * from tabel_murid order by nis asc";
        }


        $hasil=mysqli_query($connect,$sql);
        $no=0;
        while ($data = mysqli_fetch_array($hasil)) {
            $no++;

            ?>
            <tbody>
            <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $data["nis"]; ?></td>
                <td><?php echo $data["nama_lengkap"];   ?></td>
                <td><?php echo $data["kelas"];   ?></td>
                <td><?php echo $data["jurusan"];   ?></td>
            </tr>
            </tbody>
            <?php
        }
        ?>
    </table>
</div>
    
    <!-- <h1><center>Daftar Siswa Cabang Cinambo</center></h1>
        <table border="1" cellpadding="6px" align="center">
            <tr align="center" style="font-size: 18px">
                <td>NIS</td>
                <td>NO</td>
                <td>Nama Siswa</td>
                <td>Kelas</td>
                <td>Jurusan</td>
                <td colspan="2">Tindakan</td>
            </tr> -->

           
       

            <?php 
                $sql="select * from tabel_murid";
                $check=mysqli_query($connect, $sql) or die (mysqli_error());

                while($result=mysqli_fetch_array($check)) {
                    $id=$result['nis'];
                        echo "<tr align='center' style='font-size: 18px'>";
                        echo "<td>".$id."</td>";
                        echo "<td>".$result['no']."</td>";
                        echo "<td>".$result['nama_lengkap']."</td>";
                        echo "<td>".$result['kelas']."</td>";
                        echo "<td>".$result['jurusan']."</td>";
                        echo "<td><a href=\"procces_delete.php?id=$id\""."onClick=\"return confirm('Hapus Data?')\"".">Delete</a></td>\n";
                        echo "<td><a href=\"edit.php?id=$id\">Edit</a></td>\n";
                        echo "</tr>";
                }
            ?> -->
        <!-- <!-- </table>
    <center><a href="insert.php">Tambah Data siswa</a></center> -->
</body>
</html>