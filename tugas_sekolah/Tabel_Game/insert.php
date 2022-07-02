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
                <td>Kode Game</td>
                <td><input type="text" name="kode_game"></td>
            </tr>
            <tr>
                <td>Nama Game</td>
                <td><input type="text" name="nama_game"></td>
            </tr>
            <tr>
                <td>jumlah Barang</td>
                <td><input type="text" name="jumlah_barang"></td>
            </tr>
            <tr>
                <td>Harga Satuan</td>
                <td><input type="text" name="harga_satuan"></td>
            </tr>
            <tr>
                <td colspan="1" align="left"><input type="submit" name="submit" value="Save"></td>
                <td colspan="1" align="left"><input type="reset" name="submit" value="Reset"></td>
            </tr>
        </table>
    </form>
    <a href="index.php">Home</a>
</body>
</html>
