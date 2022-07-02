<?php

if (isset($_POST["submit"])) {
    $name = htmlentities(strip_tags(trim($_POST["name"])));
    $email = htmlentities(strip_tags(trim($_POST["email"])));
    $comment = htmlentities(strip_tags(trim($_POST["comment"])));

    $pesan_err = "";

    if (empty($name)) {
        $pesan_err .= "<p>Nama belum diisi !<p>";
    }

    if (empty($email)) {
        $pesan_err .= "<p>Email belum diisi !</p>";
    } else if (!preg_match("/.+@.+\..+/", $email)) {
        $pesan_err .= "<p>Format email tidak sesuai !</p>";
    }

    $error_code = $_FILES["uploadFile"]["error"];

    if ($error_code !== 0) {
        $arr_error = [

            1 => "Ukuran file melewati batas maksimal !",
            2 => "Ukuran file melewati batas maksimal 5MB !",
            3 => "File hanya ter-upload sebagian !",
            4 => "Tidak ada file yang ter-upload !",
            6 => "Server error !",
            7 => "Server error !",
            8 => "Server error !",
        ];
        $pesan_err .= $arr_error[$error_code];
    } else {
        $move_folder = "upload_file";
        $file_name = $_FILES["uploadFile"]["name"];
        $path = "$move_folder/$file_name";

        if (file_exists($path)) {
            $pesan_err .= "<p>File dengan nama yang sama sudah ada di server !</p>";
        }

        $file_size = $_FILES["uploadFile"]["size"];
        if ($file_size > 5242880) {
            $pesan_err .= "<p>Ukuran file melebihi 5MB !</p>";
        }

        $file_type = getimagesize($_FILES["uploadFile"]["tmp_name"]);
        if ($file_type  == false) {
            $pesan_err .= "<p>Mohon upload file gambar (.jpg, .gif, .png) !</p>";
        }
    }

    if ($pesan_err === "") {
        $move_folder = "upload_file";
        $file_name = $_FILES["uploadFile"]["name"];
        $tmp_name = $_FILES["uploadFile"]["tmp_name"];

        move_uploaded_file($tmp_name, "$move_folder/$file_name");
        include "buku_tamu.php";
        die();
    }
} else {
    $pesan_err = "";
    $name = "";
    $email = "";
    $comment = "";
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($_POST) && empty($_FILES)) {
    $post_max = ini_get("post_max_size");
    $pesan_err .= "<p>Ukuran file melewati batas maksimal ({$post_max}B)</p>";
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
        <h1>buku tamu duniailkom</h1>
        <?php if ($pesan_err !== "") {
            echo "<div class=\"error\">$pesan_err</div>";
        } ?>
        <form action="" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend>buku tamu</legend>
                <table>
                    <tr>
                        <td><label for="name">Nama</label></td>
                        <td>:</td>
                        <td><input type="text" name="name" value="<?= $name; ?>" id="name"></td>
                    </tr>
                    <tr>
                        <td><label for="email">Email</label></td>
                        <td>:</td>
                        <td><input type="text" name="email" value="<?= $email; ?>" id="email"></td>
                    </tr>
                    <tr>
                        <td><label for="comment">Komentar</label></td>
                        <td>:</td>
                        <td><textarea name="comment" id="comment" cols="20" rows="5"><?= $comment; ?></textarea></td>
                    </tr>
                    <tr>
                        <td><label for="uploadFile">Display Picture</label></td>
                        <td>:</td>
                        <td><input type="file" name="uploadFile" id="uploadFile" accept="image/*"></td>
                    </tr>
                </table>
            </fieldset>
            <button type="submit" name="submit">Proses Data</button>
        </form>
    </div>
</body>

</html>