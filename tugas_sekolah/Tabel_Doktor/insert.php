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
                <td>Kode Dokter</td>
                <td><input type="text" name="kode_dokter"></td>
            </tr>
            <tr>
                <td>Nama Dokter</td>
                <td><input type="text" name="nama_dokter"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>No.Telp</td>
                <td><input type="text" name="telepon"></td>
            </tr>
            <tr>
                <td>Spesialis</td>
                <td><input type="text" name="spesialis"></td>
            </tr>
            <tr>
                <td>Kode Poli</td>
                <td><input type="text" name="kode_poli"></td>
            </tr>
            <tr>
                <td colspan="2" align="right"><input type="submit" name="submit" value="Save"></td>
            </tr>
        </table>
    </form>
    <a href="index.php">Home</a>
</body>
</html>
