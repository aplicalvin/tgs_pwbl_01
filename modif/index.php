<?php 
// Include --> memanggil file lain
include 'MemberJKT48.php';
include 'MemberTrainee.php';
include 'JadwalKonser.php';

// Membuat objek MemberJKT48 dan MemberTrainee
$member1 = new MemberJKT48('Shania', 'Generation 2', '1999-01-01');
$member2 = new MemberTrainee('Amanda', 'Generation 3', '2000-05-20', 'Trainee B');

// Membuat objek JadwalKonser
$jadwal1 = new JadwalKonser('2025-04-15 18:00', 'Jakarta', 'JKT48 Production');
$jadwal2 = new JadwalKonser('2025-05-05 19:00', 'Surabaya', 'JKT48 Production');

// Menampilkan data member dan jadwal konser
echo '<pre>';
print_r($member1->getData());
print_r($member2->getData());
print_r($jadwal1->getData());
print_r($jadwal2->getData());
echo '</pre>';
?>
