<!DOCTYPE html>
<html>
<head>
	<title>Pokébattle</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container mt-5">
		<div class="row">
			<div class="col-6">
				<div class="card" style="width: 18rem;">
				  	<img src="images/pikachu.jpg" class="card-img-top">
				</div>  	
				<br>
				<div class="card" style="width: 18rem;">
				  	<img src="images/charmeleon.png" class="card-img-top">
				</div>
			</div>	
			<?php
				spl_autoload_register(function ($class_name) {
				    include $class_name . '.php';
				});
			?>		

			<?php
				// Pikachu //
				$pikachuName = new Pikachu();
				$pikachuType = new EnergyType();
				$pikachuHitpoints = new Pikachu();
				$pikachuHealth = new Pikachu();
				$pikachuWeakness = new Weakness();
				$pikachuMultiplier =  new Weakness();
				$pikachuResistanceType = new Resistance();
				$pikachuResistanceValue = new Resistance();
				$pikachuNameAttackER = new Attack();
				$pikachuNameAttackPP = new Attack();
				$pikachuDamageAttackER = new Attack();
				$pikachuDamageAttackPP = new Attack();

				//echo "<h2>Information Pikachu</h2>";
				//echo "Name: " . $pikachuName->getPikachuName() . "<br>";
				//echo "Type: " . $pikachuType->getPikachuType() . "<br>";
				//echo "Hitpoints: " . $pikachuHitpoints->getPikachuHitpoints() . "<br>";
				//echo "Health: " . $pikachuHealth->getPikachuHealth() . "<br>";
				//echo "Weakness type: " . $pikachuWeakness->getPikachuWeakness() . "<br>";
				//echo "Attack 1: " . $pikachuNameAttackER->getPikachuNameAttackER() . "<br>";
				//echo "Attack 2: " . $pikachuNameAttackPP->getPikachuNameAttackPP() . "<br>";
			?>

			<?php
				// Charmeleon //
				$charmeleonName = new Charmeleon();
				$charmeleonType = new EnergyType();
				$charmeleonHitpoints = new Charmeleon();
				$charmeleonHealth = new Charmeleon();
				$charmeleonWeakness = new Weakness();
				$charmeleonMultiplier =  new Weakness();
				$charmeleonResistanceType = new Resistance();
				$charmeleonResistanceValue = new Resistance();
				$charmeleonNameAttackHB = new Attack();
				$charmeleonNameAttackF = new Attack();
				$charmeleonDamageAttackHB = new Attack();
				$charmeleonDamageAttackF = new Attack();

				//echo "<h2>Information Charmeleon</h2>";
				//echo "Name: " . $charmeleonName->getCharmeleonName() . "<br>";
				//echo "Type: " . $charmeleonType->getCharmeleonType() . "<br>";
				//echo "Hitpoints: " . $charmeleonHitpoints->getCharmeleonHitpoints() . "<br>";
				//echo "Health: " . $charmeleonHealth->getCharmeleonHealth() . "<br>";
				//echo "Weakness type: " . $charmeleonWeakness->getCharmeleonWeakness() . "<br>";
				//echo "Attack 1: " . $charmeleonNameAttackHB->getCharmeleonNameAttackHB() . "<br>";
				//echo "Attack 2: " . $charmeleonNameAttackF->getCharmeleonNameAttackF() . "<br>";
			?>	

			<div class="col-6">
				<?php
					echo "<h4>Current health before attacks</h4>";
					echo "Start Health" . " " . $pikachuName->getPikachuName() . " " . "=" . " " . $pikachuHealth->getPikachuHealth() . "<br>";
					echo "Start Health" . " " . $charmeleonName->getCharmeleonName() . " " . "=" . " " . $charmeleonHealth->getCharmeleonHealth() . "<br>";
					echo "<br>";
					echo "<h4>The fight starts</h4>";
					echo $pikachuName->getPikachuName() . " " . "starts with the first attack" . "<br>";
					echo "<strong>*" . $pikachuName->getPikachuName() . " " . "do" . " " . $pikachuNameAttackER->getPikachuNameAttackER() . "*</strong>" . "<br>";
					echo "Charmeleon got some damage" . "<br>";
					echo "<br>";
					echo $charmeleonName->getCharmeleonName() . " " . "is doing a attack" . "<br>";
					echo "<strong>*" . $charmeleonName->getCharmeleonName() . " " . "do" . " " . $charmeleonNameAttackF->getCharmeleonNameAttackF() . "*</strong>" . "<br>";
					echo "Pikachu got some damage" . "<br>";
					echo "<br>";
					echo "<h4>Current health after attacks</h4>";
					echo "End Health" . " " . $pikachuName->getPikachuName() . " " . "=" . " ";
						if ($charmeleonWeakness->getCharmeleonWeakness() == $pikachuType->getPikachuType()) {
							echo $pikachuDamageAttackER->getPikachuDamageER()*$charmeleonMultiplier->getCharmeleonMultiplier() . "<br>";
						}elseif ($pikachuType->getPikachuType()  == $charmeleonResistanceType->getCharmeleonResistanceType()) {
							echo $charmeleonHealth->getCharmeleonHealth()-$pikachuDamageAttackER->getPikachuDamageER()+$charmeleonResistanceValue->getCharmeleonResistanceValue() . "<br>"; 
						}else{
							echo $charmeleonHealth->getCharmeleonHealth()-$pikachuDamageAttackER->getPikachuDamageER() . "<br>";
						}
					echo "End Health" . " " . $charmeleonName->getCharmeleonName() . " " . "=" . " ";
						if ($pikachuWeakness->getPikachuWeakness() == $charmeleonType->getCharmeleonType()) {
							echo $charmeleonDamageAttackF->getCharmeleonDamageF()*$pikachuMultiplier->getPikachuMultiplier() . "<br>";
						}elseif ($charmeleonType->getCharmeleonType() == $pikachuResistanceType->getPikachuResistanceType()) {
							echo $pikachuHealth->getPikachuHealth()-$charmeleonDamageAttackF->getCharmeleonDamageF()+$pikachuResistanceValue->getPikachuResistanceValue() . "<br>";
						}else{
							echo $pikachuHealth->getPikachuHealth()-$charmeleonDamageAttackF->getCharmeleonDamageF() . "<br>";
						}
				?>
			</div>
		</div>	
	</div>
</body>
</html>

