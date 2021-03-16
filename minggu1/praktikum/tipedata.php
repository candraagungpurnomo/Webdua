<?php
$nim = "A22.2020.02820";
$nama = 'Candra Agung Purnomo';
$umur = 22;
$nilai = 82.25;
$status = TRUE;
echo "NIM : " . $nim . "<br>";
echo "Nama : $nama<br>";
print "Umur : " . $umur; print "<br>";
printf ("Nilai : %.3f<br>", $nilai);
if ($status)
echo "Status : Aktif<br>";
else
echo "Status : Tidak Aktif";

?>