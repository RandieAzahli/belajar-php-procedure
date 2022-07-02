<?php

class Siswa {
    public $nama;
    public $umur;
    public $tgl_lahir;

    public function getStatus() {

        return $this->nama . " adalah seorang Siswa";
    }
}

$siswa_1 = new Siswa();
$siswa_1->nama = "Andi";
$siswa_1->umur = 13;
$siswa_1->tgl_lahir = "13 Des 1990";

echo $siswa_1->getStatus();

echo "<pre>";
var_dump($siswa_1);
echo "</pre>";