<?php
// Meng-extend kelas MemberJKT48
class MemberTrainee extends MemberJKT48 {
    // Atribut tambahan untuk MemberTrainee
    private $kelompok;

    // Konstruktor
    public function __construct($nama, $gen, $tgl_lahir, $kelompok) {
        parent::__construct($nama, $gen, $tgl_lahir); // Memanggil konstruktor parent
        $this->kelompok = $kelompok;
    }

    // Method untuk mendapatkan data member trainee
    public function getData() {
        return array_merge(parent::getData(), [
            'kelompok' => $this->kelompok
        ]);
    }
}
?>
