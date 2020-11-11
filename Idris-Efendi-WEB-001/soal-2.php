<?php 

// 2020-05-01
$tanggal = "2020-05-01";

// a. Ubah format tanggal di atas menjadi 05-20-01 menggunakan substring
echo substr($tanggal, 5, 3) . substr($tanggal, 0, 2) . substr($tanggal, 7, 3);

echo "<br>";

// b. Ubah format tanggal di atas menjadi 05-20-01 menggunakan format date php
echo date('m-y-d', strtotime($tanggal));

echo "<br>";

// c. Tampilkan 6 bulan kedepan dari tanggal di atas
$enam_bulan = date('m-y-d', strtotime('+6 months', strtotime($tanggal)));
echo $enam_bulan;

echo "<br>";

// d. Berapa umur anda jika dihitung dari tanggal di atas
$birthday = "1998-05-22";

$diff  = date_diff(date_create($tanggal), date_create($birthday) );

echo $diff->format("Usia saya adalah %Y tahun %m bulan %d hari");

?>