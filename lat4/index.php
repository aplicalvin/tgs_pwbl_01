<?php 
// Include --> memanggil file lain
include 'Mahasiswa.php';
include 'MahasiswaTransfer.php';
include 'MataKuliah.php';

// Membuat object dari sebuah Class
$matkul_1 = new MataKuliah();
$matkul_2 = new MataKuliah();

$daftar_nilai = [
    "1" => ['sks' => 2, 'nilai' => 'A'],
    "2" => ['sks' => 3, 'nilai' => 'B'],
    "3" => ['sks' => 2, 'nilai' => 'C']
];

$mahasiswa1 = new MahasiswaTransfer($daftar_nilai);

// Dari kode diatas, mahasiswa1, matkul_1, matkul_2 adalah sebuah objek

// Memasukkan data ke dalam objek mahasiswa1 dengan method yang sudah di buat, yaitu method "setData"
$matkul_1->setData('A11.12345', 'Pemrograman Berbasis Web');
$matkul_2->setData('A11.12346', 'Pemrograman Web Lanjut');

// Dalam mengisi data, ternyata dapat diisi dengan sebuah array (dari data matkul) 
// kode ini mungkin revisi dari ppt sebelumnya yang menampilkan data berupa tanggal lahir ^_^
$mahasiswa1->setData('A11.2023.14880', 'Calvin Samuel Simbolon', [$matkul_1, $matkul_2], '2005-08-23');

// mencoba memberikan output, di tampilkan di layar dengan echo
echo '<pre>';
print_r($mahasiswa1->getData());
echo '<pre>';





?>