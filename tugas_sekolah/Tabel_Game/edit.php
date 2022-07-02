<?php 
    include "connection.php";

    if(isset($_GET['id'])) {
        $id=$_GET['id'];
        $result=mysqli_query($connect,"select * from tabel_game where kode_game='$id'") or die(mysql_error());
        $row=mysqli_fetch_array($result);

        $id=$row['kode_game'];
        $no=$row['no'];
        $nama_game=$row['nama_game'];
        $jumlah_barang=$row['jumlah_barang'];
        $harga_satuan=$row['harga_satuan'];
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
                <td>Kode Game</td>
                <td><input type='text' name='kode_game' size='25' value='<?php echo "$id"?>' readonly></td>
            </tr>
            <tr>
                <td>Nama Game</td>
                <td><input type='text' size='25' name='nama_game' value='<?php echo "$nama_game"?>'></td>
            </tr>
            <tr>
                <td>Jumlah Barang</td>
                <td><input type='text' size='25' name='jumlah_barang' value='<?php echo "$jumlah_barang"?>'></td>
            </tr>
            <tr>
                <td>Harga Satuan</td>
                <td><input type='text' size='25' name='harga_satuan' value='<?php echo "$harga_satuan"?>'></td>
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
