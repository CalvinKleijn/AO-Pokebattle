<!DOCTYPE html>
<html>
<head>
	<title>Pokébattle</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php
	require 'Pokemon.php';
	require 'EnergyType.php';
	require 'Pikachu.php';
	require 'Charmeleon.php';

	// Pikachu //
	$pikachuName = new Pikachu();
	$pikachuType = new EnergyType();
	$pikachuHitpoints = new Pikachu();
	$pikachuHealth = new Pikachu();

	echo "Name: " . $pikachuName->getPickachuName() . "<br>";
	echo "Type: " . $pikachuType->getPickachuType() . "<br>";
	echo "Hitpoints: " . $pikachuHitpoints->getPickachuHitpoints() . "<br>";
	echo "Health: " . $pikachuHealth->getPickachuHitpoints() . "<br>";

	// Breakpoint //
	echo "<br>";

	// Charmeleon //
	$charmeleonName = new Charmeleon();
	$charmeleonType = new EnergyType();
	$charmeleonHitpoints = new Charmeleon();
	$charmeleonHealth = new Charmeleon();

	echo "Name: " . $charmeleonName->getCharmeleonName() . "<br>";
	echo "Type: " . $charmeleonType->getCharmeleonType() . "<br>";
	echo "Hitpoints: " . $charmeleonHitpoints->getCharmeleonHitpoints() . "<br>";
	echo "Health: " . $charmeleonHealth->getCharmeleonHitpoints() . "<br>";
?>
</body>
</html>

