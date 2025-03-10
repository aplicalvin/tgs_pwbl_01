<?php 
class MataKuliah {
    // deklarasi attribut
    private $kode, $nama;


    // Function / method untuk set data 
    public function setData($kode, $nama) {
        $this->kode = $kode;
        $this->nama = $nama;
    }
    
    // Function / method untuk get data 
    public function getData() {
        return [
            $this->kode,
            $this->nama
        ];
    }
}


?>