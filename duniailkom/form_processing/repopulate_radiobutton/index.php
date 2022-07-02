<?php

if (isset($_POST["submit"])) {

    if (isset($_POST["kurir"])) {
        $kurir = htmlentities(strip_tags(trim($_POST["kurir"])));

        $pesan_err  = "";

        // if (true) {
        //     $pesan_err .= "Maaf, ini hanya percobaan !" . "</br>";
        // }

        $checked_jne = "";
        $checked_tiki = "";
        $checked_pos = "";

        switch ($kurir) {

            case "JNE":
                $checked_jne = "checked";
                break;

            case "TIKI":
                $checked_tiki = "checked";
                break;

            case "POS":
                $checked_pos = "checked";
                break;
        }

        if ($pesan_err === "") {
            echo "<h1>Form berhasil di proses !</h1>";
            echo "</br>";
            echo "Kurir : $kurir";
            die();
        }
    } else {
        $pesan_err = "Harus di isi !";
        $checked_jne = "";
        $checked_tiki = "";
        $checked_pos = "";
    }
} else {
    $pesan_err = "";
    $checked_jne = "";
    $checked_tiki = "";
    $checked_pos = "";
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
                <td><label>Kurir Pengiriman</label></td>
                <td>:</td>
                <td>
                    <input type="radio" name="kurir" value="JNE" id="jne" <?= $checked_jne; ?>>
                    <label for="jne">JNE</label>
                </td>
                <td>
                    <input type="radio" name="kurir" value="TIKI" id="tiki" <?= $checked_tiki ?>>
                    <label for="tiki">TIKI</label>
                </td>
                <td>
                    <input type="radio" name="kurir" value="POS" id="pos" <?= $checked_pos; ?>>
                    <label for="pos">POS</label>
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