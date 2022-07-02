<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
</head>
<body>
    <h1>Insert Data</h1>
    <form action="procces_insert.php" method="POST">
        <table>
            <tr>
                <td>Kode Menu</td>
                <td><input type="text" name="kode_menu"></td>
            </tr>
            <tr>
                <td>Nama Menu</td>
                <td><input type="text" name="nama_menu"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr>
                <td>Satuan</td>
                <td><input type="text" name="satuan"></td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td><input type="text" name="kategori"></td>
            </tr>
            <tr>
                <td>Status Stok</td>
                <td><input type="text" name="status_stok"></td>
            </tr>
            <tr>
                <td colspan="2" align="right"><input type="submit" name="submit" value="Save"></td>
            </tr>
        </table>
    </form>
    <a href="index.php">Home</a>
</body>
</html>
