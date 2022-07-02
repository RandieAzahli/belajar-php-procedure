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
                <td>NIS</td>
                <td><input type="text" name="nis"></td>
            </tr>
            <tr>
                <td>Nama Siswa</td>
                <td><input type="text" name="nama_lengkap"></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>
                <select name="kelas">
                    <option selected="">Pilih Kelas</option>
                    <option value="X">X</option>
                    <option value="XI">XI</option>
                    <option value="XII">XII</option>
                </select>
                </td>
            </tr>
            <tr>
                <td>Jurusan</td>
               <td>
               <select name="jurusan">
                    <option selected="">Pilih Jurusan</option>
                    <option value="RPL">RPL</option>
                    <option value="AK">AK</option>
                    <option value="TKJ">TKJ</option>
                </select>
               </td>
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
