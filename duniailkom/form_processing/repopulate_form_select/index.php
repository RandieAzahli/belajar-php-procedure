<?php

if (isset($_POST["submit"])) {

    $buku = htmlentities(strip_tags(trim($_POST["buku"])));

    $pesan_err = "";

    if (empty($buku)) {
        $pesan_err .= "Buku belum dipilih !" . "</br>";
    }

    if ($buku == "JavaScript Uncover" or $buku == "MySQL Uncover") {
        $pesan_err .= "Maaf, buku belum tersedia !" . "</br>";
    }

    $html_selected = "";
    $css_selected = "";
    $php_selected = "";
    $javascript_selected = "";
    $mysql_selected = "";

    switch ($buku) {

        case "HTML Uncover":
            $html_selected = "selected";
            break;

        case "CSS Uncover":
            $css_selected = "selected";
            break;

        case "PHP Uncover":
            $php_selected = "selected";
            break;

        case "JavaScript Uncover":
            $javascript_selected = "selected";
            break;

        case "MySQL Uncover":
            $mysql_selected = "selected";
            break;
    }

    if ($pesan_err === "") {
        echo "<h1>Form berhasil diproses ! </h1>";
        echo "</br>";
        echo "Buku : $buku";
        die();
    }
} else {
    $pesan_err = "";
    $html_selected = "";
    $css_selected = "";
    $php_selected = "";
    $javascript_selected = "";
    $mysql_selected = "";
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
                <td><label for="buku">Buku</label></td>
                <td>:</td>
                <td>
                    <select name="buku" id="buku">
                        <option value="" selected>Pilih Buku</option>
                        <option value="HTML Uncover" <?= $html_selected; ?>>HTML Uncover</option>
                        <option value="CSS Uncover" <?= $css_selected; ?>>CSS Uncover</option>
                        <option value="PHP Uncover" <?= $php_selected; ?>>PHP Uncover</option>
                        <option value="JavaScript Uncover" <?= $javascript_selected; ?>>JavaScript Uncover</option>
                        <option value="MySQL Uncover" <?= $mysql_selected; ?>>MySQL Uncover</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button type="submit" name="submit">Proses Data</button></td>
            </tr>
        </table>
    </form>
</body>

</html>