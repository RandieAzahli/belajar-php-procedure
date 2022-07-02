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
	var_dump($rows);
	return $rows;
}



 ?>