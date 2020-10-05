<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
//Snack 1
#	PHP Snack 1:
// Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario.
// Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
// Stampiamo a schermo tutte le partite con questo schema:
// Olimpia Milano - Cantù | 55-60.
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
// Snak 2
#	PHP Snack 2:
// Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
// 1. name sia più lungo di 3 caratteri,
// 2. che mail contenga un punto e una chiocciola
// 3. e che age sia un numero.
// Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”


$name = isset($_GET['name']) ? strlen($_GET['name']) > 3 ? $_GET['name'] : 'troppo corto' : 'da inserire';
$mail = isset($_GET['mail']) ? (strpos($_GET['mail'], '.') !== false && strpos($_GET['mail'], '@') !== false) ? $_GET['mail'] : 'email non valida' : 'da inserire';
$age = isset($_GET['age']) ? is_numeric($_GET['age']) ? $_GET['age'] : 'non un numero' : 'da inserire';

$dati = 'name: ' .$name .' ' .'<br>' .'mail: ' .$mail .'<br>'  .'age: ' .$age;


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>PHP Snack 1</title>
	</head>
	<body>
		<p><strong>#Snack 1</strong></p>
		<h1> Risulatai 2° giornata LBA</h1>
		<?php
		matchesScore($matches);
		?>
		<p><strong>#Snack 2</strong></p>
		<h4>Utente: </h4>
		<?php

		echo $dati;

		 ?>
	</body>
</html>
