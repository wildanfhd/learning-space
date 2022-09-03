<?php
$nim = "043921220"; // Double Quote String
$nama = 'Mayer'; // Single quote string
$umur = 20; // Integer
$nilai = 89.80; // Float
$status = TRUE; // Boolean

echo "NIM : " . $nim . "\n";
echo "Nama : $nama\n";
print "Umur : " . $umur . "\n";
printf ("Nilai : %.3f\n", $nilai);
if($status) {
    echo "Status : Aktif";
} else {
    echo "Status : Tidak Aktif";
}