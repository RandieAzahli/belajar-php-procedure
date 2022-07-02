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

    $tgl = htmlentities(strip_tags(trim($_POST["tgl"])));
    $bln = htmlentities(strip_tags(trim($_POST["bln"])));
    $thn = htmlentities(strip_tags(trim($_POST["thn"])));

    $pesan_err = "";

    if ($tgl <= 10) {
        $pesan_err .= "Maaf, tanggal harus lebih dari 10" . "</br>";
    }

    if ($pesan_err === "") {
        echo "<h1>Form berhasil di proses ! </h1>";
        echo "</br>";
        echo "Tanggal dikirim : " . str_pad($tgl, 2, "0", STR_PAD_LEFT) . " - " . str_pad($bln, 2, "0", STR_PAD_LEFT) . " - " . $thn;
        die();
    }
} else {
    $pesan_err = "";
    $tgl = 1;
    $bln = 1;
    $thn = 2019;
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
                <td><label for="">Tanggal Dikirim</label></td>
                <td>:</td>
                <td>
                    <select name="tgl" id="">
                        <?php for ($i = 1; $i <= 31; ++$i) : ?>
                            <?php if ($i == $tgl) : ?>
                                <option value="<?= $i; ?>" selected><?= str_pad($i, 2, "0", STR_PAD_LEFT) ?></option>
                            <?php else : ?>
                                <option value="<?= $i; ?>"><?= str_pad($i, 2, "0", STR_PAD_LEFT) ?></option>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </select>

                    <select name="bln" id="">
                        <?php foreach ($arr_bln as $key => $val) : ?>
                            <?php if ($key == $bln) : ?>
                                <option value="<?= $key; ?>" selected><?= $val; ?></option>
                            <?php else : ?>
                                <option value="<?= $key; ?>"><?= $val; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>

                    <select name="thn" id="">
                        <?php for ($i = 2019; $i <= 2025; ++$i) : ?>
                            <?php if ($i == $thn) : ?>
                                <option value="<?= $i; ?>" selected><?= str_pad($i, 2, "0", STR_PAD_LEFT) ?></option>
                            <?php else : ?>
                                <option value="<?= $i; ?>"><?= str_pad($i, 2, "0", STR_PAD_LEFT) ?></option>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </select>
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