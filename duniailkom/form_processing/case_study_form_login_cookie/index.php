<?php

if (isset($_POST["submit"])) {
    $username = htmlentities(strip_tags(trim($_POST["username"])));
    $password = htmlentities(strip_tags(trim($_POST["password"])));

    $pesan_err = "";

    if (empty($username)) {
        $pesan_err .= "<p>Username belum diisi !</p>";
    }

    if (empty($password)) {
        $pesan_err .= "<p>Password harus diisi !</p>";
    }

    if ($username != "admin" or $password != "rahasia") {
        $pesan_err .= "<p>Username atau password tidak sesuai !</p>";
    }

    if ($pesan_err === "") {
        setcookie("username", "admin");
        setcookie("nama", "Alex");
        header("Location: data_siswa.php");
    }
} else {
    $pesan_err = "";
    $username = "";
    $password = "";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Selamat Datang</h1>
        <h3>Website Sekolah SMKN 13 Bandung</h3>
        <?php if ($pesan_err !== "") {
            echo "<div class=\"error\">$pesan_err</div>";
        } ?>
        <form action="" method="POST">
            <fieldset>
                <legend>Login</legend>
                <table>
                    <tr>
                        <td><label for="username">Username</label></td>
                        <td>:</td>
                        <td><input type="text" name="username" value="<?= $username; ?>" id="username"></td>
                    </tr>
                    <tr>
                        <td><label for="password">Password</label></td>
                        <td>:</td>
                        <td><input type="password" name="password" value="<?= $password; ?>" id="password"></td>
                    </tr>
                </table>
                <button type="submit" name="submit">Login</button>
            </fieldset>
        </form>
    </div>
</body>

</html>