<?php
class MemberJKT48 {
    // Atribut
    private $nama, $gen, $tgl_lahir;

    // Konstruktor
    public function __construct($nama, $gen, $tgl_lahir) {
        $this->nama = $nama;
        $this->gen = $gen;
        $this->tgl_lahir = $tgl_lahir;
    }

    // Method untuk mendapatkan data member
    public function getData() {
        return [
            'nama' => $this->nama,
            'gen' => $this->gen,
            'tgl_lahir' => $this->tgl_lahir
        ];
    }
}
?>
