<?php

if (isset($_POST["submit"])) {
    echo "<pre>";
    print_r($_POST);
    print_r($_FILES);
    echo "</pre>";

    echo "</br>";

    echo "Nama file : " . $_POST["fileName"];
    echo "</br>";
    echo "Nama file original : " . $_FILES["uploadFile"]["name"];
    echo "</br>";
    echo "Fullpath : " . $_FILES["uploadFile"]["full_path"];
    echo "</br>";
    echo "MIME type : " . $_FILES["uploadFile"]["type"];
    echo "</br>";
    echo "Temporary : " . $_FILES["uploadFile"]["tmp_name"];
    echo "</br>";
    echo "Kode error : " . $_FILES["uploadFile"]["error"];
    echo "</br>";
    echo "Ukuran file : " . $_FILES["uploadFile"]["size"];
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
    <form action="" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td><label for="filename">Nama File</label></td>
                <td>:</td>
                <td><input type="text" name="fileName" id="filename"></td>
            </tr>
            <tr>
                <td><label for="uploadFile">Upload File</label></td>
                <td>:</td>
                <td><input type="file" name="uploadFile" id="uploadFile"></td>
            </tr>
            <tr>
                <td><button type="submit" name="submit">Proses Data</button></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </form>
</body>

</html>