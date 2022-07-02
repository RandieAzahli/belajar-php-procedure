<?php 

$mahasiswa = [
	["Randie", "0046096940", "Teknik Informatika", "Randyboled@outlook.com"],
	["Sandie", "1234567898", "Teknik Industri", "sandy@yahoo.com"],
	["Erik","1202031212","Teknik Manejemen","Erik@gmail.com"]

];

$kelas = ["nama" => "Randie","NRP" => "0046096940"];
echo "<pre>";
print_r($kelas);
echo "</pre>";
echo $kelas["nama"];
echo "</br>";
echo $kelas["NRP"];



 ?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Daftar Mahasiswa</title>
</head>
<body>

	<h1>Daftar Mahasiswa</h1>
<?php foreach($mahasiswa as $value) : ?>
	<ul>
		<li>Nama :<?= $value[0] ?></li>
		<li>NRP :<?= $value[1] ?></li>
		<li>Jurusan :<?= $value[2] ?></li>
		<li>Email :<?= $value[3] ?></li>
	</ul>
<?php endforeach; ?>
	
</body>
</html> -->