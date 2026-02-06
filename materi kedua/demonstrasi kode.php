<?php

class Mahasiswa {
    public $nim;
    public $nama;
    public $prodi;

    public function __construct($nim, $nama, $prodi) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
    }

    public function getProfile() {
        return "[$this->nim] $this->nama - $this->prodi";
    }
}

// Membuat object Mahasiswa
$m1 = new Mahasiswa("T3124097", "imelda marsya", "Teknik Informatika");

// Menampilkan data
echo $m1->getProfile();

?>