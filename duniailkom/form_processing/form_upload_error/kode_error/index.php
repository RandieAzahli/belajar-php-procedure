<?php

if (isset($_POST["submit"])) {

    $arr_uploadError = array(

        0 => "File sukses di upload !",
        1 => "Upload gagal, ukuran file melewati batas maksimal !",
        2 => "Upload gagal, ukuran file melewati batas maksimal !",
        3 => "Upload gagal, File hanya ter-upload sebagian !",
        4 => "Upload gagal, Tidak ada file yang ter-upload !",
        6 => "Upload gagal, Server error !",
        7 => "Upload gagal, Server error !",
        8 => "Upload gagal, Server error !",
    );

    $error = $_FILES["uploadFile"]["error"];
    $pesan_err = $arr_uploadError[$error];
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
                <td><label for="uploadfile">Upload File</label></td>
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