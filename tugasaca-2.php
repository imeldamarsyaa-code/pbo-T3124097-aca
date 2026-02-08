<?php

class Buku {
    private $judul;
    private $penulis;
    private $tahunTerbit;

    public function __construct($judul, $penulis, $tahunTerbit) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahunTerbit = $tahunTerbit;
    }

    public function getInfo() {
        return "Judul: " . $this->judul . ", Penulis: " . $this->penulis . ", Tahun: " . $this->tahunTerbit;
    }
}

// buat object buku
$buku1 = new Buku("Laskar Pelangi", "Andrea Hirata", 2005);
$buku2 = new Buku("Bumi Manusia", "Pramoedya Ananta Toer", 1980);
$buku3 = new Buku("Negeri 5 Menara", "Ahmad Fuadi", 2009);

// tampilkan info
echo $buku1->getInfo() . "<br>";
echo $buku2->getInfo() . "<br>";
echo $buku3->getInfo() . "<br>";

?>

