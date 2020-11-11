<?php  

$string = "AKU SUKA MAKAN NASI PADANG";

$kata = explode(' ', strtolower($string));

$jum_kata = count($kata);

for ($i = 0; $i < $jum_kata ; $i++) {
	$no = $i;
	echo "[$no]" . " => "; 
	for ($b = 0; $b <= $i; $b++){
		echo $kata[$b] . " ";
	}
	echo "<br>";
}

for ($i = 0; $i < $jum_kata ; $i++) {
	$no = $i + $jum_kata;
	echo "[$no]" . " => ";
	for ($b = $jum_kata - 1; $b >= $i; $b--){
		echo $kata[$b] . " ";
	}
	echo "<br>";
}

?>