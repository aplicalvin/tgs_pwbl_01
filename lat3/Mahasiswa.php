<?php
class Mahasiswa {
    // deklarasi attribut
    private $nim, $nama, $matkul, $tgl_lahir;
    public $umur; // attribut nama bersifat public, dan sekarang bisa di akses langsung (berkat acces modifier)
    // percobaan kedua, akses dicoba private

    public function setData($nim, $nama, $matkul, $tgl_lahir) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->matkul = $matkul;
        $this->tgl_lahir = $tgl_lahir;
        $this->setUmur();

    }

    
    // Function / Method yang digunakan untuk menghitung umur. dengan rumus tahun ini - tahun kita lahir 
    public function setUmur() {
        $this->umur = date('Y') - substr($this->tgl_lahir, 0, 4);
    }



    public function getData() {
        return [
            $this->nim,
            $this->nama,
            $this->matkul,
            $this->tgl_lahir,
            $this->umur
        ];
    }
}


?>