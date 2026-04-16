<?php

header('Content-Type: application/json');

$data = [
  'nama' => 'Muhammad Rifki Fadhilah',
  'pekerjaan' => "Mahasiswa",
  'lokasi' => "Purwokerto"
];

echo json_encode($data);
?>