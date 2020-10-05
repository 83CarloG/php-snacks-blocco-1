<!--
#	PHP Snack 1:
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario.
Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60.
 -->

<?php

$matches = [
	 [
		'casa' => 'Trento',
		'ospite' => 'Reggio Emilia',
		'puntiCasa' => 81,
		'puntiOspite' => 87
	],
	[
		'casa' => 'Cremona',
		'ospite' => 'Venezia',
		'puntiCasa' => 66,
		'puntiOspite' => 83
	],
	[
		'casa' => 'Milano',
		'ospite' => 'Treviso',
		'puntiCasa' => 104,
		'puntiOspite' => 64
	],
	[
		'casa' => 'Brescia',
		'ospite' => 'V.Bologna',
		'puntiCasa' => 80,
		'puntiOspite' => 81
	],
	[
		'casa' => 'Sassari',
		'ospite' => 'Trieste',
		'puntiCasa' => 72,
		'puntiOspite' => 74
	],
	[
		'casa' => 'F.Bologna',
		'ospite' => 'Varese',
		'puntiCasa' => 83,
		'puntiOspite' => 88
	],
	[
		'casa' => 'Brindisi',
		'ospite' => 'Roma',
		'puntiCasa' => 92,
		'puntiOspite' => 67
	],
	[
		'casa' => 'Cantù',
		'ospite' => 'Pesaro',
		'puntiCasa' => 81,
		'puntiOspite' => 72
	]
];

function matchesScore ($value)	{
	// Contegio l'array matches = numero partite
	$totalMatches = count($value);
	// Stampo l'array
		for ($i=0; $i < $totalMatches ; $i++) {
			$match = $value[$i]['casa'] .' - ' .$value[$i]['ospite'] .' ' .$value[$i]['puntiCasa'] .' | ' .$value[$i]['puntiOspite'];
			echo $match;
			echo '<br>';
		}
}


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>PHP Snack 1</title>
	</head>
	<body>
		<h1> Risulatai 2° giornata LBA</h1>
		<?php

		matchesScore($matches);

		?>
	</body>
</html>
