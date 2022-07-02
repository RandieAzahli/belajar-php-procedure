<?php 

if (isset($_POST["submit"])) {

    $nama = htmlentities(strip_tags(trim($_POST["nama"])));
    $email = htmlentities(strip_tags(trim($_POST["email"])));

    $pesan_error = "";

    if (empty($nama)) {
        $pesan_error .= "Nama belum diisi !" . "</br>";
    }
    else if (strlen($nama) < 5) {
        $pesan_error .= "Nama minimal 5 digit !" . "</br>";
    }

    if (empty($email)) {
        $pesan_error .= "Email belum diisi !" . "</br>";
    }
    else if (strpos($email, "@")  == false) {
        $pesan_error .= "Penulisan alamat email salah !" . "</br>";
    }

    if ($pesan_error == "") {
        echo "<h1>Form berhasil diproses</h1>";
        echo "Nama : $nama";
        echo "</br>";
        echo "Email : $email";
        die();
    }
}
else {
    $pesan_error = "";
    $nama = "";
    $email = "";
}

?>

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
    <?= $pesan_error; ?>
    <form action="" method="POST">
        <table>
            <tr>
                <td><label for="nama">Nama</label></td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?= $nama;?>" id="nama"></td>
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td>:</td>
                <td><input type="text" name="email" value="<?= $email;?>" id="email"></td>
            </tr>
            <tr>
                <td></td>
                <td>:</td>
                <td><input type="checkbox" name="belajar" value="php" id="">Belajar PHP</td>
            </tr>
            <tr>
                <td><button type="submit" name="submit" value="Proses data">Kirim Data</button></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </form>
</body>
</html>