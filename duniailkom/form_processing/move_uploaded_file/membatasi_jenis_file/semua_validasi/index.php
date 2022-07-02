<?php

if (isset($_POST["submit"])) {
    $error = $_FILES["uploadFile"]["error"];
    $pesan_err = "";

    if ($error === 0) {
        $move_folder = "../../uploaded_file";
        $file_name = $_FILES["uploadFile"]["name"];
        $tmp = $_FILES["uploadFile"]["tmp_name"];
        $path = "$move_folder/$file_name";
        $upload_failed = false;

        if (file_exists($path)) {
            $pesan_err = "File dengan nama yang sama sudah ada di server !" . "</br>";
            $upload_failed = true;
        }

        $file_size = $_FILES["uploadFile"]["size"];
        if ($file_size > 10000000) {
            $pesan_err .= "Ukuran file melebihi 700kb !" . "</br>";
            $upload_failed = true;
        }

        $type = getimagesize($_FILES["uploadFile"]["tmp_name"]);
        if ($type == false) {
            $pesan_err .= "Mohon upload file gambar (.jpg, .gif, .png) !" . "</br>";
            $upload_failed = true;
        }

        if (!$upload_failed and move_uploaded_file($tmp, $path)) {
            $pesan_err = "File sukses di upload !";
        } else {
            $pesan_err .= "File gagal di simpan !";
        }
    } else {
        $pesan_err = "File gagal di upload !";
    }
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
    <h1>Upload File</h1>
    <?php if (!empty($pesan_err)) {
        echo "<p>$pesan_err</p>";
    } ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td><label for="uploadFile">Upload File</label></td>
                <td>:</td>
                <td><input type="file" name="uploadFile" id="uploadFile" accept=".jpg, .gif, .png"></td>
            </tr>
            <tr>
                <td><button type="submit" name="submit">Proses Data</button></td>
            </tr>
        </table>
    </form>
</body>

</html>