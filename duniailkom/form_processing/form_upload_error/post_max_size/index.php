<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($_FILES) && empty($_POST)) {
    $postMax = ini_get("post_max_size");
    $pesan_err = "Ukuran file melewati batas maksimal ({$postMax})";
}

if (isset($_POST["submit"])) {
    $error = $_FILES["uploadFile"]["error"];

    if ($error === 0) {
        $pesan_err = "File sukses di upload !";
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