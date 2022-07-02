<?php

if (!isset($_POST["submit"])) {
    header("Location: index.php");
    die();
} else if (isset($_POST["submit"])) {
    if ($comment === "") {
        $comment = "Tidak ada komentar !";
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
    <link rel="stylesheet" href="buku.css">
</head>

<body>
    <div class="container">
        <h1>Buku Tamu Duniailkom</h1>
        <table>
            <img src="<?= "upload_file/$file_name"; ?>" alt="">
            <tr>
                <th>Nama</th>
                <td><?= $name; ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?= $email; ?></td>
            </tr>
            <tr>
                <th>Komentar</th>
                <td><?= $comment; ?></td>
            </tr>
        </table>
    </div>
</body>

</html>