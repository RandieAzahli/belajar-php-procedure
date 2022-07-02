<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halaman Form</h1>

    <form action="proses.php" method="POST">
        <table>
            <tr>
                <td><label for="nama">Nama</label></td>
                <td>:</td>
                <td><input type="text" name="nama" id="nama"></td>
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td>:</td>
                <td><input type="text" name="email" id="email"></td>
            </tr>
            <tr>
                <td></td>
                <td>:</td>
                <td><input type="checkbox" name="belajar" value="php" id="">Belajar PHP</td>
            </tr>
            <tr>
                <td><button type="submit">Kirim Data</button></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </form>
</body>
</html>