<!DOCTYPE html>
<html>
<head>
	<title>Pokébattle</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php
	spl_autoload_register(function ($class_name) {
	    include $class_name . '.php';
	});

	// Pikachu //
	$pikachuName = new Pikachu();
	$pikachuType = new EnergyType();
	$pikachuHitpoints = new Pikachu();
	$pikachuHealth = new Pikachu();
	$pikachuWeakness = new Weakness();
	$pikachuMultiplier =  new Weakness();
	$pikachuNameAttackER = new Attack();
	$pikachuNameAttackPP = new Attack();
	$pikachuDamageAttackER = new Attack();
	$pikachuDamageAttackPP = new Attack();

	echo "Name: " . $pikachuName->getPikachuName() . "<br>";
	echo "Type: " . $pikachuType->getPikachuType() . "<br>";
	echo "Hitpoints: " . $pikachuHitpoints->getPikachuHitpoints() . "<br>";
	echo "Health: " . $pikachuHealth->getPikachuHealth() . "<br>";
	echo "Weakness type: " . $pikachuWeakness->getPikachuWeakness() . "<br>";
	echo "Multiplier: " . $pikachuMultiplier->getPikachuMultiplier() . "<br>";
	echo "Attack 1: " . $pikachuNameAttackER->getPikachuNameAttackER() . "<br>" . "Damage: " . $pikachuDamageAttackER->getPikachuDamageER() . "<br>";
	echo "Attack 2: " . $pikachuNameAttackPP->getPikachuNameAttackPP() . "<br>" . "Damage: " . $pikachuDamageAttackPP->getPikachuDamagePP() . "<br>";

	// Breakpoint //
	echo "<br>";

	// Charmeleon //
	$charmeleonName = new Charmeleon();
	$charmeleonType = new EnergyType();
	$charmeleonHitpoints = new Charmeleon();
	$charmeleonHealth = new Charmeleon();
	$charmeleonWeakness = new Weakness();
	$charmeleonMultiplier =  new Weakness();
	$charmeleonNameAttackHB = new Attack();
	$charmeleonNameAttackF = new Attack();
	$charmeleonDamageAttackHB = new Attack();
	$charmeleonDamageAttackF = new Attack();

	echo "Name: " . $charmeleonName->getCharmeleonName() . "<br>";
	echo "Type: " . $charmeleonType->getCharmeleonType() . "<br>";
	echo "Hitpoints: " . $charmeleonHitpoints->getCharmeleonHitpoints() . "<br>";
	echo "Health: " . $charmeleonHealth->getCharmeleonHealth() . "<br>";
	echo "Weakness type: " . $charmeleonWeakness->getCharmeleonWeakness() . "<br>";
	echo "Multiplier: " . $charmeleonMultiplier->getCharmeleonMultiplier() . "<br>";
	echo "Attack 1: " . $charmeleonNameAttackHB->getCharmeleonNameAttackHB() . "<br>" . "Damage: " . $charmeleonDamageAttackHB->getCharmeleonDamageHB() . "<br>";
	echo "Attack 2: " . $charmeleonNameAttackF->getCharmeleonNameAttackF() . "<br>" . "Damage: " . $charmeleonDamageAttackF->getCharmeleonDamageF() . "<br>";
?>
</body>
</html>

