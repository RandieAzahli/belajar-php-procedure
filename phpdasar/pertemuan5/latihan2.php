<?php 

// Pengulanngan pada array
// for / foreach

$angka = [3,2,15,20,11,88,1,45];

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Latihan 2</title>
 	<style>
 		.kotak
 		{
 			width: 50px;
	 		height: 50px;
	 		background-color: salmon;
	 		text-align: center;
	 		line-height: 50px;
	 		margin: 3px;
	 		float: left;
            transition: 0.5s;
 		}
        .kotak:hover
        {
            transform: rotate(360deg);
        }
 		.clear
 		{
 			clear: both;
 		}
 	</style
 </head>
 <body>
 	<?php for($i = 0; $i < count($angka); $i++) :?>
 		<div class="kotak"><?= $angka[$i] ?></div>
 	<?php endfor ?>

 		<div class="clear"></div>

 	<?php foreach($angka as $value) : ?>
 		<div class="kotak"><?= $value ?></div>
 	<?php endforeach ?>




 </body>
 </html>