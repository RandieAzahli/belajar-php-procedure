<?php 
    include "connection.php";

    if(isset($_GET['id'])) {
        $id=$_GET['id'];
        $result=mysqli_query($connect,"select * from tabel_murid where nis='$id'") or die(mysql_error());
        $row=mysqli_fetch_array($result);

        $id=$row['nis'];
        $no=$row['no'];
        $nama_lengkap=$row['nama_lengkap'];
        $kelas=$row['kelas'];
        $jurusan=$row['jurusan'];
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
                <td>NIS</td>
                <td><input type='text' name='nis' size='25' value='<?php echo "$id"?>' readonly></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td><input type='text' size='25' name='nama_lengkap' value='<?php echo "$nama_lengkap"?>'></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>
                <select name="kelas" value='<?php echo "$kelas"?>'>
                    <option selected="">Pilih Jurusan</option>
                    <option value="X">X</option>
                    <option value="XI">XI</option>
                    <option value="XII">XII</option>
                </select>
                </td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>
                <select name="jurusan" value='<?php echo "$jurusan"?>'>
                    <option selected="">Pilih Jurusan</option>
                    <option value="RPL">RPL</option>
                    <option value="AK">AK</option>
                    <option value="TKJ">TKJ</option>
                </select>
                </td>
            </tr>
            <tr>
                <td colspan="1" align='left'><input type='submit' name='submit' value='Save'></td>
                <td colspan="1" align='left'><input type='reset' name='submit' value='Reset'></td>
            </tr>
        </table>
    </form>
    <a href="index.php">Home</a>
</body>
</html>
