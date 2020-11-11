<?php
$buah = [	
	["NAMA" => "JERUK", "HARGA" => 5000, "RASA" => "ASAM"],
	["NAMA" => "MANGGA", "HARGA" => 20000, "RASA" => "MANIS"],
	["NAMA" => "APEL", "HARGA" => 5000, "RASA" => "MANIS"],
	["NAMA" => "DURIAN", "HARGA" => 50000, "RASA" => "MANIS"],
	["NAMA" => "DUKU", "HARGA" => 10000, "RASA" => "ASAM"],
	["NAMA" => "NANAS", "HARGA" => 5000, "RASA" => "ASAM"]
];

// echo $buah[0];

// $input = 'S';

// $result = array_filter($buah[1][0], function ($item) use ($input) {
// 	if (stripos($item, $input) !== false) {
// 		return true;
// 	}
// 	return false;
// });

// var_dump($result);
// 
// 


function test_odd($var)
  {
  return($var & 1);
  }

$a1=array(1,3,2,3,4);
print_r(array_filter($a1,"test_odd"));


?>