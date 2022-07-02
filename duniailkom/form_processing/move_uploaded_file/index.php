<?php

if (isset($_POST["submit"])) {
    $error = $_FILES["uploadFile"]["error"];

    if ($error === 0) {
        $move_folder = "uploaded_file";
        $tmp = $_FILES["uploadFile"]["tmp_name"];
        $file_name = $_FILES["uploadFile"]["name"];

        if (move_uploaded_file($tmp, "$move_folder/$file_name")) {
            $pesan_err = "File sukses di upload !";
        } else {
            $pesan_err = "File gagal di simpan !";
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
        <input type="hidden" name="MAX_FILE_SIZE" value="5000000">
        <table>
            <tr>
                <td><label for="uploadFile">Upload File</label></td>
                <td>:</td>
                <td><input type="file" name="uploadFile" id="uploadFile"></td>
            </tr>
            <tr>
                <td><button type="submit" name="submit">Proses Data</button></td>
            </tr>
        </table>
    </form>
</body>

</html>