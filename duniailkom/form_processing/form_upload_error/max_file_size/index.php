<?php

if (isset($_POST["submit"])) {
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";
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
                <td><input type="hidden" name="MAX_FILE_SIZE" value="1000000"></td>
            </tr>
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