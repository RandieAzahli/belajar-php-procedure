<?php

if (isset($_POST["submit"])) {

    if (isset($_POST["dvd"])) {
        $dvd_checked = "checked";
        $tambahan_dvd = "+ DVD eBook";
    } else {
        $dvd_checked = "";
        $tambahan_dvd = "";
    }

    if (isset($_POST["kado"])) {
        $kado_checked = "checked";
        $tambahan_kado = "+ Bungkus Kado";
    } else {
        $kado_checked = "";
        $tambahan_kado = "";
    }

    $pesan_err = "";

    // if (true) {
    //     $pesan_err .= "Maaf, ini hanya percobaan !" . "</br>";
    // }

    if ($pesan_err === "") {
        echo "<h1>Form berhasil di proses</h1>";
        echo "</br>";
        echo "Tambahan : $tambahan_dvd $tambahan_kado";
        die();
    }
} else {
    $pesan_err = "";
    $dvd_checked = "";
    $kado_checked = "";
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
    <h1>Pemrosesan Form</h1>
    <?= $pesan_err; ?>
    <form action="" method="POST">
        <table>
            <tr>
                <td><label>Tambahan</label></td>
                <td>:</td>
                <td>
                    <input type="checkbox" name="dvd" id="dvd" value="DVD eBook" <?= $dvd_checked ?>>
                    <label for="dvd">DVD ebook</label>
                </td>
                <td>
                    <input type="checkbox" name="kado" id="kado" value="Bungkus Kado" <?= $kado_checked ?>>
                    <label for="kado">Bungkus Kado</label>
                </td>
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