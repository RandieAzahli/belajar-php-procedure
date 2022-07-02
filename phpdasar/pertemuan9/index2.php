<?php 
// koneksi ke database 

$host = "localhost";
$username = "root";
$password = "12354321";
$database = "phpdasar";

$koneksi = mysqli_connect($host, $username, $password);

if($koneksi)
{
	$coba = mysqli_select_db($koneksi, $database);
		if($coba)
		{
			echo "";
		}
		else
		{
			echo mysqli_error();
			
		}

}

// ambil data dari tabel mahasiswa
$sql = "SELECT * FROM mahasiswa";
$result = mysqli_query($koneksi, $sql) or die ( mysql_error());

// ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row() // mengembalikkan nilai numeric
// mysql_fetch_assoc() // mengembalikkan nilai asosiasi
// mysql_fetch_array() // mengembalikan keduanya
// mysqli_fetch_object()

// while($mhs = mysqli_fetch_assoc($result)){
// 	var_dump($mhs);
// }

 ?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Halaman Admin</title>
</head>
<body>
		<h1>Daftar Mahasiswa</h1>

		<table border="1" cellpadding="10" cellspacing="0">
			<tr>
				<th>No.</th>
				<th>Aksi</th>
				<th>Gambar</th>
				<th>NRP</th>
				<th>Nama</th>
				<th>Email</th>
				<th>Jurusan</th>
			</tr>
			<?php $i = 1; ?>
			<?php while($row = mysqli_fetch_assoc($result)) : ?>
			<tr>
				<td><?= $i; ?></td>
				<td>
					<a href="">Ubah</a> |
				    <a href="">Hapus</a>
				</td>
				<td><img src="../../../img/<?= $row["gambar"]; ?>" alt="profile" width="50px" height="50px"></td>
				<td><?= $row["nrp"]; ?></td>
				<td><?= $row["nama"]; ?></td>
				<td><?= $row["email"]; ?></td>
				<td><?= $row["jurusan"] ?></td>
			</tr>
			<?php $i++; ?>
			<?php endwhile; ?>
			
		</table>
</body>
</html>