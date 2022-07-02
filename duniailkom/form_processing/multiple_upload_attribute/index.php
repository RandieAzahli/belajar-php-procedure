<?php

if (isset($_POST["submit"])) {

    $jumlah_file = count($_FILES["uploadFile"]["name"]);

    $move_folder = "../move_uploaded_file/uploaded_file";

    for ($i = 0; $i < $jumlah_file; ++$i) {
        $file_name = $_FILES["uploadFile"]["name"][$i];
        $tmp_name = $_FILES["uploadFile"]["tmp_name"][$i];

        move_uploaded_file($tmp_name, "$move_folder/$file_name");
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
    <form action="" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td><label for="uploadFile">Upload File</label></td>
                <td>:</td>
                <td><input type="file" name="uploadFile[]" id="uploadFile" multiple></td>
            </tr>
            <tr>
                <td><button type="submit" name="submit">Proses Data</button></td>
            </tr>
        </table>
    </form>
</body>

</html>