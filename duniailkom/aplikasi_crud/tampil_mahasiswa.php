<?php

session_start();
if (!isset($_SESSION['nama'])) {
    header("location: login.php");
    die();
}

include "connection.php";

if (isset($_GET['pesan'])) {
    $pesan = $_GET['pesan'];
}

if (isset($_GET['submit'])) {

    $nama = htmlentities(strip_tags(trim($_GET['nama'])));
    $nama = mysqli_real_escape_string($conn, $nama);

    $query = "SELECT * FROM mahasiswa WHERE nama LIKE '%$nama%' ORDER BY nama ASC";
    if (!empty($nama)) {
        $pesan = "Hasil pencarian untuk nama <strong>\"$nama\"</strong>";
    }
} else {
    $query = "SELECT * FROM mahasiswa ORDER BY nama ASC";
}


?>

<?php include "header.php"; ?>
<div class="data">
    <h2>Data Mahasiswa</h2>
    <?php if (isset($pesan)) {
        echo "<div>$pesan</div>";
    } ?>
    <table>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Fakultas</th>
            <th>Jurusan</th>
            <th>IPK</th>
        </tr>

        <?php
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>{$row['nim']}</td>";
            echo "<td>{$row['nama']}</td>";
            echo "<td>{$row['tempat_lahir']}</td>";
            echo "<td>{$row['tanggal_lahir']}</td>";
            echo "<td>{$row['fakultas']}</td>";
            echo "<td>{$row['jurusan']}</td>";
            echo "<td>{$row['ipk']}</td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>
<?php include "footer.php"; ?>