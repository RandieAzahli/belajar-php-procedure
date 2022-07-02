<?php 

if(isset($_POST["submit"])) {

    $nama = htmlentities(strip_tags(trim($_POST["nama"])));
    $email = htmlentities(strip_tags(trim($_POST["email"])));
    $website = htmlentities(strip_tags(trim($_POST["website"])));

    $pesan_err = "";

    if (empty($nama)) {
        $pesan_err .= "Nama belum diisi !" . "</br>";
    }

    if (empty($email)) {
        $pesan_err .= "Email belum diisi !" . "</br>";
    }
    else if (!preg_match("/.+@.+\..+/", $email)) {
        $pesan_err .= "Format email tidak sesuai !". "</br>";
    }

    if (!empty($website) AND !preg_match("/.+@.+\..+/", $website)) {
        $pesan_err .= "Format website tidak sesuai !" . "</br>";
    }

    if ($pesan_err == "") {
        echo "<h1>Form berhasil diproses</h1>";
        echo "Nama : $nama";
        echo "</br>";
        echo "Email : $email";
        echo "</br>";
        echo "Website : $website";
        die();
    }

}
else {
    $pesan_err = "";
    $nama = "";
    $email = "";
    $website = "";
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
    <h1>Pemrosesan Form</h1>
    <?= $pesan_err; ?>
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
                <td><label for="website">Website</label></td>
                <td>:</td>
                <td><input type="text" name="website" value="<?= $website;?>" id="website"></td>
            </tr>
            <tr>
                <td><button type="submit" name="submit">Proses Data</button></td>
            </tr>
        </table>
    </form>
</body>
</html>