<?php

$arr_bln = array(

    "1" => "Januari",
    "2" => "Februari",
    "3" => "Maret",
    "4" => "April",
    "5" => "Mei",
    "6" => "Juni",
    "7" => "Juli",
    "8" => "Agustus",
    "9" => "September",
    "10" => "Oktober",
    "11" => "November",
    "12" => "Desember"
);

if (isset($_POST["submit"])) {

    $nama = htmlentities(strip_tags(trim($_POST["nama"])));
    $email = htmlentities(strip_tags(trim($_POST["email"])));
    $buku = htmlentities(strip_tags(trim($_POST["buku"])));
    $jumlah = htmlentities(strip_tags(trim($_POST["jumlah"])));
    $alamat = htmlentities(strip_tags(trim($_POST["alamat"])));
    $kurir = htmlentities(strip_tags(trim($_POST["kurir"])));
    $ongkir = htmlentities(strip_tags(trim($_POST["ongkir"])));
    $tgl = htmlentities(strip_tags(trim($_POST["tgl"])));
    $bln = htmlentities(strip_tags(trim($_POST["bln"])));
    $thn = htmlentities(strip_tags(trim($_POST["thn"])));

    $pesan_err = "";

    if (empty($nama)) {
        $pesan_err .= "Nama belum diisi !" . "</br>";
    }

    if (empty($email)) {
        $pesan_err .= "Email harus diisi !" . "</br>";
    } else if (!preg_match("/.+@.+\..+/", $email)) {
        $pesan_err .= "Format email tidak sesuai !" . "</br>";
    }

    $select_html = "";
    $select_css = "";
    $select_php = "";
    $select_js = "";
    $select_mysql = "";

    switch ($buku) {

        case "HTML Uncover":
            $select_html = "selected";
            break;

        case "CSS Uncover":
            $select_css = "selected";
            break;

        case "PHP Uncover":
            $select_php = "selected";
            break;

        case "JavaScript Uncover":
            $select_js = "selected";
            break;

        case "MySQL Uncover":
            $select_mysql = "selected";
            break;
    }

    if (empty($alamat)) {
        $pesan_err .= "Alamat Pengiriman belum di isi !" . "</br>";
    }

    $checked_jne = "";
    $checked_pos = "";
    $checked_tiki = "";

    switch ($kurir) {

        case "JNE":
            $checked_jne = "checked";
            break;

        case "POS":
            $checked_pos = "checked";
            break;

        case "TIKI":
            $checked_tiki = "checked";
    }

    if (!is_numeric($ongkir) or ($ongkir <= 0) or ($ongkir % 1000 != 0)) {
        $pesan_err .= "Ongkos kirim harus dalam keliapatan 1000 !" . "</br>";
    }

    if (isset($_POST["dvd"])) {
        $checked_dvd = "checked";
        $tambahan_dvd = "+ DVD eBook";
    } else {
        $checked_dvd = "";
        $tambahan_dvd = "";
    }

    if (isset($_POST["kado"])) {
        $checked_kado = "checked";
        $tambahan_kado = "+ Bungkus Kado";
    } else {
        $checked_kado = "";
        $tambahan_kado = "";
    }

    if ($pesan_err === "") {
        include "pembelian.php";
        die();
    }
} else {
    $pesan_err = "";
    $nama = "";
    $email = "";
    $select_html = "selected";
    $select_css = "";
    $select_php = "";
    $select_js = "";
    $select_mysql = "";
    $jumlah = 0;
    $alamat = "";
    $checked_jne = "checked";
    $checked_tiki = "";
    $checked_pos = "";
    $ongkir = "";
    $tgl = 1;
    $bln = "1";
    $thn = 2015;
    $checked_dvd = "";
    $checked_kado = "";
    $tambahan_dvd = "";
    $tambahan_kado = "";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Pembelian buku duniailkom</h2>
    <div class="container">
        <?php if ($pesan_err !== "") {
            echo "<div class=\"error\">$pesan_err</div>";
        } ?>
        <form action="" method="POST">
            <fieldset>
                <legend>
                    <h4>Form order</h4>
                </legend>

                <table>
                    <tr>
                        <td><label for="nama">Nama</label></td>
                        <td>:</td>
                        <td><input type="text" name="nama" value="<?= $nama; ?>" id="nama"></td>
                    </tr>
                    <tr>
                        <td><label for="email">Email</label></td>
                        <td>:</td>
                        <td><input type="email" name="email" value="<?= $email; ?>" id="email"></td>
                    </tr>
                    <tr>
                        <td><label for="buku">Jenis Buku</label></td>
                        <td>:</td>
                        <td>
                            <select name="buku" id="buku">
                                <option value="HTML Uncover" <?= $select_html; ?>>HTML Uncover</option>
                                <option value="CSS Uncover" <?= $select_css; ?>>CSS Uncover</option>
                                <option value="JavaScript Uncover" <?= $select_js; ?>>JavaScript Uncover</option>
                                <option value="PHP Uncover" <?= $select_php; ?>>PHP Uncover</option>
                                <option value="MySQL Uncover" <?= $select_mysql; ?>>MySQL Uncover</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="jumlah">Jumlah Buku</label></td>
                        <td>:</td>
                        <td>
                            <select name="jumlah" id="jumlah">
                                <?php for ($i = 1; $i <= 10; ++$i) : ?>
                                    <?php if ($i == $jumlah) : ?>
                                        <option value="<?= $i; ?>" selected><?= $i; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $i; ?>"><?= $i; ?></option>
                                    <?php endif; ?>
                                <?php endfor; ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="alamat">Alamat Pengiriman</label></td>
                        <td>:</td>
                        <td><textarea name="alamat" id="alamat" cols="30" rows="5"><?= $alamat; ?></textarea></td>
                    </tr>
                    <tr>
                        <td><label>Kurir Pengiriman</label></td>
                        <td>:</td>
                        <td>
                            <input type="radio" name="kurir" value="POS" id="pos" <?= $checked_pos; ?>>
                            <label for="pos">POS</label>
                            <input type="radio" name="kurir" value="JNE" id="jne" <?= $checked_jne; ?>>
                            <label for="jne">JNE</label>
                            <input type="radio" name="kurir" value="TIKI" id="tiki" <?= $checked_tiki; ?>>
                            <label for="tiki">TIKI</label>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="ongkir">Ongkos Kirim</label></td>
                        <td>:</td>
                        <td><input type="text" name="ongkir" value="<?= $ongkir; ?>" id="ongkir"></td>
                    </tr>
                    <tr>
                        <td><label>Tanggal Kirim</label></td>
                        <td>:</td>
                        <td>
                            <select name="tgl">
                                <?php for ($i = 1; $i <= 31; ++$i) : ?>
                                    <?php if ($i == $tgl) : ?>
                                        <option value="<?= $i; ?>" selected><?= str_pad($i, 2, "0", STR_PAD_LEFT); ?></option>
                                    <?php else : ?>
                                        <option value="<?= $i; ?>"><?= str_pad($i, 2, "0", STR_PAD_LEFT); ?></option>
                                    <?php endif; ?>
                                <?php endfor; ?>
                            </select>
                            <select name="bln">
                                <?php foreach ($arr_bln as $key => $val) : ?>
                                    <?php if ($key == $bln) : ?>
                                        <option value="<?= $key; ?>" selected><?= $val; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $key; ?>"><?= $val; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                            <select name="thn">
                                <?php for ($i = 2019; $i <= 2025; ++$i) : ?>
                                    <?php if ($i == $thn) : ?>
                                        <option value="<?= $i; ?>" selected><?= $i; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $i; ?>"><?= $i; ?></option>
                                    <?php endif; ?>
                                <?php endfor; ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label>Tambahan</label></td>
                        <td>:</td>
                        <td>
                            <input type="checkbox" name="dvd" value="DVD eBook" id="dvd" <?= $checked_dvd; ?>>
                            <label for="dvd">DVD eBook</label>
                            <input type="checkbox" name="kado" value="Bungkus Kado" id="kado" <?= $checked_kado; ?>>
                            <label for="kado">Bungkus Kado</label>
                        </td>
                    </tr>
                </table>
            </fieldset>
            <table>
                <tr>
                    <td><button type="submit" name="submit">Proses Data</button></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>