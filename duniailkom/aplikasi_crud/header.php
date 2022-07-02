<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Mahasiswa</title>
    <style>
        .container {
            padding: 30px 100px;
        }

        h4 {
            float: right;
        }

        ul {
            list-style: none;
            float: left;
            margin-left: -40px;
        }

        ul li {
            display: inline-block;
            width: 70px;
            height: 15px;
            background-color: dodgerblue;
            padding: 10px 12px;
            text-align: center;
            line-height: 15px;
        }

        ul li:hover {
            background-color: crimson;
        }

        li a {
            text-decoration: none;
            color: black;
        }

        .cf:before,
        .cf:after {
            content: " ";
            /* 1 */
            display: table;
            /* 2 */
        }

        .cf:after {
            clear: both;
        }

        nav form {
            float: right;
            margin: 20px 0;
        }

        h2 {
            text-align: center;
        }

        .data {
            margin-top: 50px;
        }

        .data table {
            border-collapse: collapse;
            border: 1pt solid black;
            border-spacing: 0;
            margin: 30px auto;
        }

        .data tr,
        .data td,
        .data th {
            padding: 10px 20px;
            border: 1pt solid black;
        }

        .tambah fieldset {
            padding: 20px 50px;
        }

        .tambah tr,
        .tambah td {
            padding: 5px 10px;
        }

        .tambah button {
            margin-top: 10px;
        }

        .error {
            background-color: crimson;
            border: 1pt solid black;
            padding: 5px 10px;
            margin: 30px 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <h4><?= date("d M Y", time()); ?></h4>
        <h1>Sistem Informasi Kampusku</h1>
        <hr>
        <nav class="cf">
            <ul>
                <li><a href="tampil_mahasiswa.php">Tampil</a></li>
                <li><a href="tambah_mahasiswa.php">Tambah</a></li>
                <li><a href="edit_mahasiswa.php">Edit</a></li>
                <li><a href="hapus_mahasiswa.php">Hapus</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
            <form action="" method="GET">
                <table>
                    <tr>
                        <td><label for="cari">Nama</label></td>
                        <td>:</td>
                        <td><input type="text" name="nama" id="cari"></td>
                        <td><button type="submit" name="submit">Cari</button></td>
                    </tr>
                </table>
            </form>
        </nav>