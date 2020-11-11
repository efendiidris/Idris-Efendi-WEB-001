<?php  

$buah = [	
	["NAMA" => "JERUK", "HARGA" => 5000, "RASA" => "ASAM"],
	["NAMA" => "MANGGA", "HARGA" => 20000, "RASA" => "MANIS"],
	["NAMA" => "APEL", "HARGA" => 5000, "RASA" => "MANIS"],
	["NAMA" => "DURIAN", "HARGA" => 50000, "RASA" => "MANIS"],
	["NAMA" => "DUKU", "HARGA" => 10000, "RASA" => "ASAM"],
	["NAMA" => "NANAS", "HARGA" => 5000, "RASA" => "ASAM"]
];

array_push($buah, ["NAMA" => "PISANG", "HARGA" => 5000, "RASA" => "MANIS"]);

$harga = array_column($buah, "HARGA");

array_multisort($harga, SORT_DESC, $buah);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DATA</title>
</head>
<body>

	<table border="1" cellpadding="5">
		<thead>
			<tr>
				<th>NAMA</th>
				<th>HARGA</th>
				<th>RASA</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($buah as $data) { ?>

				<tbody>
					<tr>
						<td><?= $data['NAMA']; ?></td>
						<td><?= $data['HARGA']; ?></td>
						<td><?= $data['RASA']; ?></td>
					</tr>
				</tbody>

				<?php

			}
			?>
		</tbody>
	</table>

	<br>

	<table border="1" cellpadding="5">
		<thead>
			<tr>
				<th>NAMA BUAH</th>
			</tr>
		</thead>
		<tbody>
			<?php

			$data_buah = [];

			foreach ($buah as $data) {

				$data_buah[] = $data['NAMA'];
			}

			$filterArray = array_filter($data_buah, function ($var) {
				return (strpos($var, 'K') !== false);
			});

			foreach ($filterArray as $data) { ?>

				<tr>
					<td><?= $data; ?></td>
				</tr>
				<?php
				
			}

			?>
		</tbody>
	</table>

	<br>

	<table border="1" cellpadding="5">
		<thead>
			<tr>
				<th>HARGA BUAH</th>
			</tr>
		</thead>
		<tbody>
			<?php

			$data_harga = [];

			foreach ($buah as $data) {

				$data_harga[] = $data['HARGA'];
			}

			foreach ($data_harga as $data) {
				if ($data < 10000) { ?>
					<tr>
						<td><?= $data; ?></td>
					</tr>

					<?php

				}
			}

			?>
		</tbody>
	</table>

</body>
</html>