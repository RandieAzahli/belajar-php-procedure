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
                <td>Kode Tiket</td>
                <td><input type="text" name="kode_tiket"></td>
            </tr>
            <tr>
                <td>Tanggal Pembelian</td>
                <td><input type="date" name="tanggal_pembelian"></td>
            </tr>
            <tr>
                <td>Nomor Kursi</td>
                <td><input type="text" name="nomor_kursi"></td>
            </tr>
            <tr>
                <td>Judul Film</td>
                <td><input type="text" name="judul_film"></td>
            </tr>
            <tr>
                <td>Jadwal Tayang</td>
                <td><input type="date" name="jadwal_tayang"></td>
            </tr>
            <tr>
                <td>Jam Tayang</td>
                <td><input type="time" name="jam_tayang"></td>
            </tr>
            <tr>
                <td>Harga Tiket</td>
                <td><input type="text" name="harga_tiket"></td>
            </tr>
            <tr>
                <td colspan="2" align="right"><input type="submit" name="submit" value="Save"></td>
            </tr>
        </table>
    </form>
    <a href="index.php">Home</a>
</body>
</html>
