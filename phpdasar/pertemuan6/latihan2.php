<?php 

// $mahasiswa = [
// 		["Randie","0046096940","Teknik Informatika","Randyboled@outlook.com"],
// 		["Randie","0046096940","Teknik Informatika","Randyboled@outlook.com"],
// 		["Randie","0046096940","Teknik Informatika","Randyboled@outlook.com"]
// ]

// array Associative
// definisinya sama dengan array numerik, kecuali
// key nya adalah string yang kita buat sendiri

$mahasiswa = [
	[
		"nama" => "Randie",
		"NRP" => "0046096940",
		"jurusan" => "Teknik Informatika",
		"email" => "Randyboled@outlook.com",
		"gambar" => "profile.jpg"
	],
	[
		"nama" => "Sandie",
		"NRP" => "1234567891",
		"jurusan" => "Teknik Industri",
		"email" => "Sandie@outlook.com",
		"gambar" => "card1.jpg"
	]
];

// echo $mahasiswa[1]["email"];

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Latihan 2</title>
 </head>
 <body>
 		<h1>Daftar Mahasiswa</h1>

 		<?php foreach($mahasiswa as $value) : ?>
 		<ul>
 			<li><img src="../../../img/<?= $value["gambar"] ?>" alt="baso" width="100px" height="100px"></li>
 			<li><?= $value["nama"]; ?></li>
 			<li><?= $value["NRP"]; ?></li>
 			<li><?= $value["jurusan"]; ?></li>
 			<li><?= $value["email"]; ?></li>
 		</ul>
 	<?php endforeach; ?>
 </body>
 </html>