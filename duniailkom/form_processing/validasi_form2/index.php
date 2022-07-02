<?php 

if (isset($_POST["submit"])) {

    $buku = htmlentities(strip_tags(trim($_POST["buku"])));
    $jumlah = htmlentities(strip_tags(trim($_POST["jumlah"])));
    $ongkir = htmlentities(strip_tags(trim($_POST["ongkir"])));

    $pesan_err = "";

    $array_buku = ["html uncover", "css uncover", "php uncover"];
    $buku = strtolower($buku);

    if (!in_array($buku, $array_buku)) {
        $pesan_err .= "Buku tidak tersedia !" . "</br>";
    }

    if (!is_numeric($jumlah)) {
        $pesan_err .= "Jumlah buku harus dalam satuan angka !" . "</br>";
    }
    else if ($jumlah <= 0 OR $jumlah > 10) {
        $pesan_err .= "Jumlah buku harus antara 1-10 !" . "</br>";
    }
    else if ($jumlah != round($jumlah)) {
        $pesan_err .= "Jumlah buku harus dalam angka bulat !" . "</br>";
    }

    if (!is_numeric($ongkir) OR ($ongkir < 5000) OR ($ongkir % 1000 != 0)) {
        $pesan_err .= "Ongkos kirim harus berupa angka dalam kelipatan 1000 (minimal 5000) !";
    }

    if ($pesan_err == "") {
        echo "<h1>Form berhasil di proses</h1>";
        echo "Nama Buku : $buku";
        echo "</br>";
        echo "Jumlah Pesanan : $jumlah";
        echo "</br>";
        echo "Ongkos Kirim : $ongkir";
        die();
    }

}
else {
    $pesan_err = "";
    $buku = "";
    $jumlah = "";
    $ongkir = "";
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
                <td><label for="buku">Jenis Buku</label></td>
                <td>:</td>
                <td><input type="text" name="buku" value="<?= $buku;?>" id="buku"></td>
            </tr>
            <tr>
                <td><label for="jumlah">Jumlah Pesanan</label></td>
                <td>:</td>
                <td><input type="text" name="jumlah" value="<?= $jumlah?>" id="jumlah"></td>
            </tr>
            <tr>
                <td><label for="ongkir">Ongkos Kirim</label></td>
                <td>:</td>
                <td><input type="text" name="ongkir" value="<?= $ongkir?>" id="ongkir"></td>
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