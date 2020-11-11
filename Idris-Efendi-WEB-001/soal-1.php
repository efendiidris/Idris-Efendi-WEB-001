<?php  

$angka = "1,3,5,7,9,11,13,15";

$array = explode(',', $angka);

sort($array);

foreach ($array as $value) {
	
	echo $value;
	echo "<br>";

}

?>