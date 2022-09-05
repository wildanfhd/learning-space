<?php

// * 1. Data Null pada PHP

// * Mengosongkan nilai/data pada sebuah variable
$nama = "Kyujin";
$nama = NULL;

// * Menginisialisasi variabel dengan tanpa nilai atau null
$kota = NULL;

echo "Nama : ";
echo $nama;
echo "\n";

echo "Kota : ";
echo $kota;
echo "\n";

// * 2. Mengecek apakah data == null atau tidak
echo "Is name Null ? : ";
var_dump(is_null($nama));
echo "\n";

// Menghapus variable dengan unset()
$contoh = "Ini Contoh";
unset($contoh);

$contoh = " Contoh lain";

var_dump(isset($contoh));