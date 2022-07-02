<?php 
    include "connection.php";

    if(isset($_GET['id'])) {
        $id=$_GET['id'];
        $result=mysqli_query($connect,"select * from tabel_dokter where kode_dokter='$id'") or die(mysql_error());
        $row=mysqli_fetch_array($result);

        $id=$row['kode_dokter'];
        $no=$row['No'];
        $nama=$row['nama_dokter'];
        $alamat=$row['alamat'];
        $telepon=$row['telepon'];
        $spesialis=$row['spesialis'];
        $kode_poli=$row['kode_poli'];
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
                <td>Kode Dokter</td>
                <td><input type='text' name='kode_dokter' size='25' value='<?php echo "$id"?>' ></td>
            </tr>
            <tr>
                <td>Nama Dokter</td>
                <td><input type='text' size='25' name='nama_dokter' value='<?php echo "$nama"?>'></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type='text' size='25' name='alamat' value='<?php echo "$alamat"?>'></td>
            </tr>
            <tr>
                <td>No.Telp</td>
                <td><input type='text' size='25' name='telepon' value='<?php echo "$telepon"?>'></td>
            </tr>
            <tr>
                <td>Spesialis</td>
                <td><input type='text' size='25' name='spesialis' value='<?php echo "$spesialis"?>'></td>
            </tr>
            <tr>
                <td>Kode Poli</td>
                <td><input type='text' size='25' name='kode_poli' value='<?php echo "$kode_poli"?>'></td>
            </tr>
            <tr>
                <td colspan="2" align='right'><input type='submit' name='submit' value='Save'></td>
            </tr>
        </table>
    </form>
    <a href="index.php">Home</a>
</body>
</html>
