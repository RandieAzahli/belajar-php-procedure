<?php

// ? how to create class, object, property, and methode

class Produk
{
	public $judul, $penulis, $penerbit, $harga;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga")
	{
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function getLabel()
	{
		return "$this->penulis, $this->penerbit";
	}
}

class infoProduk
{
	public function cetakInfo(produk $produk)
	{
		return "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
	}
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shounen Jump", 45000);

$produk2 = new Produk("Uncharted", "Donny Druckman", "Aplex", 67000);

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";

$infoProduk_1 = new infoProduk();
echo $infoProduk_1->cetakInfo($produk1);
?>
