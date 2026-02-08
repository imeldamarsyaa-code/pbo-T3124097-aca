<?php

class Mahasiswa {
    private $nim;
    private $nama;
    private $ipk;

    public function __construct($nim, $nama, $ipk) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->ipk = $ipk;
    }

    public function getStatus() {
        if ($this->ipk >= 3.0) {
            return "Baik";
        } else {
            return "Perlu bimbingan";
        }
    }

    public function getNim() {
        return $this->nim;
    }

    public function getNama() {
        return $this->nama;
    }
}

// buat object
$mhs1 = new Mahasiswa("751335125012", "Gita Rahmawati", 3.5);
$mhs2 = new Mahasiswa("751335125013", "Andi Saputra", 2.7);

// tampilkan hasil
echo "NIM: " . $mhs1->getNim() . "<br>";
echo "Nama: " . $mhs1->getNama() . "<br>";
echo "Status: " . $mhs1->getStatus() . "<br><br>";

echo "NIM: " . $mhs2->getNim() . "<br>";
echo "Nama: " . $mhs2->getNama() . "<br>";
echo "Status: " . $mhs2->getStatus() . "<br>";

?>
