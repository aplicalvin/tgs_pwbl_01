<?php
class JadwalKonser {
    // Atribut
    private $schedule, $kota, $penyelenggara;

    // Konstruktor
    public function __construct($schedule, $kota, $penyelenggara) {
        $this->schedule = $schedule;
        $this->kota = $kota;
        $this->penyelenggara = $penyelenggara;
    }

    // Method untuk mendapatkan data jadwal konser
    public function getData() {
        return [
            'schedule' => $this->schedule,
            'kota' => $this->kota,
            'penyelenggara' => $this->penyelenggara
        ];
    }
}
?>
