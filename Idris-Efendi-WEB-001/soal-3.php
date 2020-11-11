<?php  

// a. urutkan array tersebut (asc dan desc).
$asc = [20, 10, 100, 30, 15, 5];

sort($asc);

echo "ASC = ";

foreach ($asc as $data) {
	echo $data . " ";
}

echo "<br>";

$dsc = [20, 10, 100, 30, 15, 5];

rsort($dsc);

echo "DSC = ";

foreach ($dsc as $data) {
	echo $data . " ";
}

echo "<hr>";

// b. tambahkan angka 180 di posisi terakhir pada array di atas
$angka = [20, 10, 100, 30, 15, 5];

array_push($angka, 180);

foreach ($angka as $data) {
	echo $data . " ";
}

echo "<hr>";

// c. hapus angka 30 pada array di atas
$angka = [20, 10, 100, 30, 15, 5];

$angka = array_diff($angka, [30]);

foreach ($angka as $data) {
	echo $data . " ";
}

?>