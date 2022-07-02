<?php

// ? how to create class, object, property, and methode

class Produk
{
	public $judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain, $tipe;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga", $jmlHalaman = "jml halaman", $waktuMain = "waktu main", $tipe = "tipe")
	{
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;
		$this->tipe = $tipe;
	}

	public function getLabel()
	{
		return "$this->penulis, $this->penerbit";
	}

	public function cetakInfoLengkap()
	{
		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

		if ($this->tipe == "komik") {
			$str .= ", {$this->jmlHalaman} halaman";
		} elseif ($this->tipe == "game") {
			$str .= ", {$this->waktuMain} jam";
		}

		return $str;
	}
}

class infoProduk
{
	public function cetakInfo(produk $produk)
	{
		return "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
	}
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shounen Jump", 45000, 100, 0, "komik");

$produk2 = new Produk("Uncharted", "Donny Druckman", "Aplex", 67000, 0, 50, "game");

echo $produk1->cetakInfoLengkap();
echo "<br>";
echo $produk2->cetakInfoLengkap();

?>
