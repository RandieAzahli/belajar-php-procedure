<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Latihan array</title>
</head>
<style>
	.kotak
	{
		width: 30px;
		height: 30px;
		background-color: salmon;
		text-align: center;
		line-height: 30px;
		margin: 3px;
		float: left;
		transition: 0.5s;
	}
	.kotak:hover
	{
		transform: rotate(180deg);
		border-radius: 50%;
	}
	.clear
	{
		clear: both;
	}
</style>
<body>

	<?php 
		$angka = [
			[1,2,3],
			[4,5,6],
			[7,8,9]
		];
	 ?>

	 <?php foreach($angka as $value) : ?>

	 	<?php foreach($value as $child) : ?>
		<div class="kotak"><?= $child?></div>
		<?php endforeach; ?>
		<div class="clear"></div>
	<?php endforeach; ?>
</body>
</html>