<?php 
    include "connection.php";

    if(isset($_GET['id'])) {
        $id=$_GET['id'];
        $result=mysqli_query($connect,"select * from tabel_menu where kode_menu='$id'") or die(mysql_error());
        $row=mysqli_fetch_array($result);

        $id=$row['kode_menu'];
        $no=$row['No'];
        $nama=$row['nama_menu'];
        $harga=$row['harga'];
        $satuan=$row['satuan'];
        $kategori=$row['kategori'];
        $status_stok=$row['status_stok'];
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
                <td><input type='text' name='kode_menu' size='25' value='<?php echo "$id"?>' ></td>
            </tr>
            <tr>
                <td>Nama Menu</td>
                <td><input type='text' size='25' name='nama_menu' value='<?php echo "$nama"?>'></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type='text' size='25' name='harga' value='<?php echo "$harga"?>'></td>
            </tr>
            <tr>
                <td>Satuan</td>
                <td><input type='text' size='25' name='satuan' value='<?php echo "$satuan"?>'></td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td><input type='text' size='25' name='kategori' value='<?php echo "$kategori"?>'></td>
            </tr>
            <tr>
                <td>Status Stok</td>
                <td><input type='text' size='25' name='status_stok' value='<?php echo "$status_stok"?>'></td>
            </tr>
            <tr>
                <td colspan="2" align='right'><input type='submit' name='submit' value='Save'></td>
            </tr>
        </table>
    </form>
    <a href="index.php">Home</a>
</body>
</html>
