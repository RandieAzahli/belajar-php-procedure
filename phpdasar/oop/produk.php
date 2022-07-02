<?php

// ? how to create class, object, property, and methode

class Produk
{
	public $judul, $penulis, $penerbit, $harga;

	public function getLabel()
	{
		return "$this->penulis, $this->penerbit";
	}
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";

// $produk2 = new Produk();
// $produk2->judul = "Uncharted";
// $produk2->tambahProperti = "hahaha";

// var_dump($produk1);
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shounen Jump";
$produk3->harga = 50000;

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckman";
$produk4->penerbit = "Sonny Computer";
$produk4->harga = 250000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();

?>
