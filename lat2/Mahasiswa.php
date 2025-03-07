<?php
class Mahasiswa {
    // deklarasi attribut
    private $nim, $matkul;
    public $nama; // attribut nama bersifat public, dan sekarang bisa di akses langsung (berkat acces modifier)

    public function setData($nim, $nama, $matkul) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->matkul = $matkul;

    }

    public function getData() {
        return [
            $this->nim,
            $this->nama,
            $this->matkul
        ];
    }
}


?>