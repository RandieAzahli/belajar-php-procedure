<?php 
    include "connection.php";

    if(isset($_GET['id'])) {
        $id=$_GET['id'];
        $result=mysqli_query($connect,"select * from siswa where id_siswa='$id'") or die(mysql_error());
        $row=mysqli_fetch_array($result);

        $id=$row['id_siswa'];
        $nama=$row['nama_siswa'];
        $jurusan=$row['jurusan'];
        $mapel=$row['mata_pelajaran'];
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
                <td>id</td>
                <td><input type='text' name='id_siswa' size='25' value='<?php echo "$id"?>'></td>
            </tr>
            <tr>
                <td>Nama siswa</td>
                <td><input type='text' size='25' name='nama_siswa' value='<?php echo "$nama"?>'></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td><input type='text' size='25' name='jurusan' value='<?php echo "$jurusan"?>'></td>
            </tr>
            <tr>
                <td>Mata Pelajaran</td>
                <td><input type='text' size='25' name='mata_pelajaran' value='<?php echo "$mapel"?>'></td>
            </tr>
            <tr>
                <td colspan="2" align='right'><input type='submit' name='submit' value='Save'></td>
            </tr>
        </table>
    </form>
    <a href="index.php">Home</a>
</body>
</html>