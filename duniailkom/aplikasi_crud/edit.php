<?php

include "connection.php";

session_start();
if (!isset($_SESSION['nama'])) {
    header("location: login.php");
    die();
}

if ($_POST['submit'] == "edit") {
    $nim = htmlentities(strip_tags(trim($_POST['nim'])));
    $nim = mysqli_real_escape_string($conn, $nim);

    $query = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
    $result = mysqli_query($conn, $query);

    $data = mysqli_fetch_assoc($result);

    $nama = $data['nama'];
    $tempat_lahir = $data['tempat_lahir'];
    $tanggal_lahir = $data['tanggal_lahir'];

    $fakultas = $data['fakultas'];

    $kedokteran_selected = "";
    $fmipa_selected = "";
    $ekonomi_selected = "";
    $fasilkom_selected = "";

    switch ($fakultas) {

        case "Kedokteran":
            $kedokteran_selected = "selected";
            break;

        case "FMIPA":
            $fmipa_selected = "selected";
            break;

        case "Ekonomi":
            $ekonomi_selected = "selected";
            break;

        case "FASILKOM":
            $fasilkom_selected = "selected";
            break;
    }

    $jurusan = $data['jurusan'];
    $ipk = $data['ipk'];
    $pesan_err = "";
} else {
    $nim = htmlentities(strip_tags(trim($_POST['nim'])));
    $nama = htmlentities(strip_tags(trim($_POST['nama'])));
    $tempat_lahir = htmlentities(strip_tags(trim($_POST['tempat_lahir'])));
    $tanggal_lahir = htmlentities(strip_tags(trim($_POST['tanggal_lahir'])));

    $fakultas = htmlentities(strip_tags(trim($_POST['fakultas'])));
    $kedokteran_selected = "";
    $fmipa_selected = "";
    $ekonomi_selected = "";
    $fasilkom_selected = "";

    switch ($fakultas) {

        case "Kedokteran":
            $kedokteran_selected = "selected";
            break;

        case "FMIPA":
            $fmipa_selected = "selected";
            break;

        case "Ekonomi":
            $ekonomi_selected = "selected";
            break;

        case "FASILKOM":
            $fasilkom_selected = "selected";
            break;
    }
    $jurusan = htmlentities(strip_tags(trim($_POST['jurusan'])));
    $ipk = htmlentities(strip_tags(trim($_POST['ipk'])));

    $pesan_err = "";

    if (empty($nama)) {
        $pesan_err .= "Nama belum diisi !" . "</br>";
    }

    if (empty($tempat_lahir)) {
        $pesan_err .= "Tempat lahir belum diisi !" . "</br>";
    }

    if (empty($tanggal_lahir)) {
        $pesan_err .= "Tanggal lahir belum diisi !" . "</br>";
    }

    if (empty($jurusan)) {
        $pesan_err .= "Jurusan belum diisi !" . "</br>";
    }

    if (empty($ipk)) {
        $pesan_err .= "IPK belum diisi !" . "</br>";
    }

    if (($pesan_err === "") and ($_POST['submit']) == "update") {
        $nim = mysqli_real_escape_string($conn, $nim);
        $nama = mysqli_real_escape_string($conn, $nama);
        $tempat_lahir = mysqli_real_escape_string($conn, $tempat_lahir);
        $tanggal_lahir = mysqli_real_escape_string($conn, $tanggal_lahir);
        $fakultas = mysqli_real_escape_string($conn, $fakultas);
        $jurusan = mysqli_real_escape_string($conn, $jurusan);
        $ipk = mysqli_real_escape_string($conn, $ipk);
        $ipk = (float) $ipk;

        $waktu_lahir = explode("-", $tanggal_lahir);
        $tanggal_lahir =  "{$waktu_lahir[0]}-{$waktu_lahir[1]}-{$waktu_lahir[2]}}";

        $query = "UPDATE mahasiswa SET ";
        $query .= "nama = '$nama', tempat_lahir = '$tempat_lahir', tanggal_lahir = '$tanggal_lahir',";
        $query .= "fakultas = '$fakultas', jurusan = '$jurusan', ipk = $ipk";
        $query .= "WHERE nim = '$nim'";

        $result = mysqli_query($conn, $query);
        if ($result) {
            $pesan = "Mahasiswa dengan nama = \"$nama\" sudah berhasil di update !";
            $pesan = urlencode($pesan);
            header("location: tampil_mahasiswa.php?pesan={$pesan}");
        }
    }
}



?>




<?php include "header.php"; ?>

<div class="tambah">
    <h2>Edit Data Mahasiswa</h2>
    <?php if ($pesan_err !== "") {
        echo "<div class=\"error\">$pesan_err</div>";
    } ?>
    <form action="" method="POST">
        <fieldset>
            <legend>Mahasiswa Baru</legend>
            <table>
                <tr>
                    <td><label for="nim">NIM</label></td>
                    <td>:</td>
                    <td><input type="text" name="nim" id="nim" value="<?= $nim; ?>" readonly></td>
                </tr>
                <tr>
                    <td><label for="nama">Nama</label></td>
                    <td>:</td>
                    <td><input type="text" name="nama" id="nama" value="<?= $nama; ?>"></td>
                </tr>
                <tr>
                    <td><label for="tempat_lahir">Tempat Lahir</label></td>
                    <td>:</td>
                    <td><input type="text" name="tempat_lahir" id="tempat_lahir" value="<?= $tempat_lahir; ?>"></td>
                </tr>
                <tr>
                    <td><label for="tanggal_lahir">Tanggal Lahir</label></td>
                    <td>:</td>
                    <td><input type="date" name="tanggal_lahir" id="tanggal_lahir" value="<?= $tanggal_lahir; ?>"></td>
                </tr>
                <tr>
                    <td><label for="fakultas">Fakultas</label></td>
                    <td>:</td>
                    <td>
                        <select name="fakultas" id="fakultas">
                            <option value="Kedokteran" <?= $kedokteran_selected; ?>>Kedokteran</option>
                            <option value="FMIPA" <?= $fmipa_selected; ?>>FMIPA</option>
                            <option value="Ekonomi" <?= $ekonomi_selected; ?>>Ekonomi</option>
                            <option value="FASILKOM" <?= $fasilkom_selected; ?>>FASILKOM</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="jurusan">Jurusan</label></td>
                    <td>:</td>
                    <td><input type="text" name="jurusan" id="jurusan" value="<?= $jurusan; ?>"></td>
                </tr>
                <tr>
                    <td><label for="ipk">IPK</label></td>
                    <td>:</td>
                    <td><input type="text" name="ipk" id="ipk" value="<?= $ipk; ?>"></td>
                </tr>
            </table>
        </fieldset>
        <button type="submit" name="submit" value="update">Update Data</button>
    </form>
</div>

<?php include "footer.php"; ?>