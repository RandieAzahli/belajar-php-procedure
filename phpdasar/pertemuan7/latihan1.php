<?php 

// $_GET
// $_GET["nama"] = "Randie";
// $_GET["nrp"] = "0046096940";

$mahasiswa = [
	[
		"nama" => "Randie",
		"nrp" => "0046096940",
		"jurusan" => "Teknik Informatika",
		"email" => "Randyboled@outlook.com",
		"gambar" => "profile.jpg"
	],
	[
		"nama" => "Sandie",
		"nrp" => "1234567891",
		"jurusan" => "Teknik Industri",
		"email" => "Sandie@outlook.com",
		"gambar" => "card1.jpg"
	]
];
// echo "<pre>";
// var_dump($_GET);
// echo "</pre>";
 
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>GET</title>
 </head>
 <body>
 		<h1>Daftar Mahasiswa</h1>
 		<ul>
 			<?php foreach($mahasiswa as $value) : ?>
 				<li><a href="latihan2.php?gambar=<?= $value["gambar"]; ?>&nama=<?= $value["nama"]; ?>&nrp=<?= $value["nrp"]; ?>&email=<?= $value["email"]; ?>&jurusan=<?= $value["jurusan"]; ?>"><?= $value["nama"]; ?></a></li>
 			<?php endforeach; ?>
 		</ul>
 </body>
 </html>