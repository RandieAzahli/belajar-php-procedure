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

function query($query)
{
	global $koneksi;
	$result = mysqli_query($koneksi, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result))
	{
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data)
{
	global $koneksi;

	$nama = htmlspecialchars($data['nama']);
	$nrp = htmlspecialchars($data['nrp']);
	$email = htmlspecialchars($data['email']);
	$jurusan = htmlspecialchars($data['jurusan']);
	$gambar = htmlspecialchars($data['gambar']);

	// query insert data
	$query = "INSERT INTO mahasiswa
				VALUES
				('','$nama','$nrp','$email','$jurusan','$gambar')";

	mysqli_query($koneksi,$query);

	return mysqli_affected_rows($koneksi);
}

function hapus($id)
{
	global $koneksi;
	mysqli_query($koneksi,"DELETE FROM mahasiswa WHERE id = $id");

	return mysqli_affected_rows($koneksi);
}

function ubah($data)
{
	global $koneksi;

	$id = $data["id"];
	$nama = htmlspecialchars($data['nama']);
	$nrp = htmlspecialchars($data['nrp']);
	$email = htmlspecialchars($data['email']);
	$jurusan = htmlspecialchars($data['jurusan']);
	$gambar = htmlspecialchars($data['gambar']);

	$query = "UPDATE mahasiswa SET
				nama = '$nama',
				nrp = '$nrp',
				email = '$email',
				jurusan = '$jurusan',
				gambar = '$gambar'
			WHERE id = $id;
		";

	mysqli_query($koneksi, $query);

	return mysqli_affected_rows($koneksi);
}


function cari($keyword)
{
	$query = "SELECT * FROM mahasiswa WHERE 
				nama LIKE  '%$keyword%' OR
				nrp LIKE  '%$keyword%' OR
				email LIKE  '%$keyword%' OR
				jurusan LIKE  '%$keyword%'
	";

	return query($query);
}

function tetap($keyword)
{
	$query = "SELECT * FROM mahasiswa ORDER BY id DESC";

	return query($query);
}


 ?>