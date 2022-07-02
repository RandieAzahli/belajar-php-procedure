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
                <td>id</td>
                <td><input type="text" name="id_siswa"></td>
            </tr>
            <tr>
                <td>Nama Siswa</td>
                <td><input type="text" name="nama_siswa"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td><input type="text" name="jurusan"></td>
            </tr>
            <tr>
                <td>Mata Pelajaran</td>
                <td><input type="text" name="mata_pelajaran"></td>
            </tr>
            <tr>
                <td colspan="2" align="right"><input type="submit" name="submit" value="Save"></td>
            </tr>
        </table>
    </form>
    <a href="index.php">Home</a>
</body>
</html>