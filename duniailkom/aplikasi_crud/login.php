<?php
// buat koneksi
include "connection.php";

// jika tombol submit ditekan
if (isset($_POST['submit'])) {
    // ambil data dari form
    $username = htmlentities(strip_tags(trim($_POST['username'])));
    $password = htmlentities(strip_tags(trim($_POST['password'])));

    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    $pesan_err = "";

    if (empty($username)) {
        $pesan_err .= "Username harus diisi !" . "</br>";
    } else if (strlen($username) < 5) {
        $pesan_err .= "Username harus lebih dari 5 karakter !" . "</br>";
    }

    if (empty($password)) {
        $pesan_err .= "Password harus diisi !" . "</br>";
    } else if (strlen($password) < 5) {
        $pesan_err .= "Password harus lebih dari 5 karakter !" . "</br>";
    }

    // password encode
    $password_encode = sha1($password);

    // cek apakah username dan password ada di tabel admin
    $query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password_encode'";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "<script>console.log('Checking data...')</script>";
    }

    if (mysqli_num_rows($result) == 0) {
        $pesan_err .= "Username dan/atau password tidak sesuai !";
    }

    if ($pesan_err === "") {
        session_start();
        $_SESSION['nama'] = $username;
        header("location: tampil_mahasiswa.php");
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
    <title>Sistem Informasi Mahasiswa</title>
    <style>
        .container {
            width: 500px;
            margin: 70px auto;
            padding: 10px 50px 80px;
            box-shadow: 1px 0px 10px, -1px 0px 10px;
        }

        h1,
        h3 {
            text-align: center;
        }

        .error {
            border: 1pt solid black;
            padding: 10px 15px;
            margin: 0 0 20px 0;
            background-color: crimson;
        }

        fieldset {
            width: 300px;
            padding: 15px;
            margin: 30px auto;
        }

        table {
            border-collapse: collapse;
        }

        tr,
        td {
            padding: 5px 10px;
        }

        button {
            float: right;
            margin-right: 50px;
            padding: 3px 5px;
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Selamat Datang</h1>
        <h3>Sistem Informasi Kampusku</h3>
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
                        <td><input type="text" name="username" id="username" value="<?= $username; ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="password">Password</label></td>
                        <td>:</td>
                        <td><input type="password" name="password" id="password" value="<?= $password; ?>"></td>
                    </tr>
                </table>
                <button type="submit" name="submit">Login</button>
            </fieldset>
        </form>
    </div>
</body>

</html>