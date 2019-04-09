<!DOCTYPE html>
<html>
<head>
	<title>Pokébattle</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="m-3">
		<div class="row">
			<?php
				spl_autoload_register(function ($class_name) {
			        include $class_name . '.php';
			    });

			    $pikachu = new Pikachu("Pikachu");
			    $charmeleon = new Charmeleon("Charmeleon");
			?>

			<div class="col-4">
				<div class="card" style="width: 18rem;">
				  	<img src="../images/pikachu.gif" class="card-img-top">
				  	<div class="card-body">
				    	<h5 class="card-title"><?php echo $pikachu->getName() ?></h5>
				    	<p class="card-text">
				    		Type: <?php echo $pikachu->getType() ?><br>
				    		Start health: <?php echo $pikachu->getHealth() ?><br>
				    	</p>
				  	</div>
				</div>

				<br>

				<div class="card" style="width: 18rem;">
				  	<img src="../images/charmeleon.gif" class="card-img-top">
				  	<div class="card-body">
				    	<h5 class="card-title"><?php echo $charmeleon->getName() ?></h5>
				    	<p class="card-text">
				    		Type: <?php echo $charmeleon->getType() ?><br>
				    		Start health: <?php echo $charmeleon->getHealth() ?><br>
				  	</div>
				</div>
			</div>

			<div class="col-8">
				<?php echo $pikachu->doAttack($charmeleon, $pikachu->attacks[0]); ?>
				<?php echo $charmeleon->doAttack($pikachu, $charmeleon->attacks[1]); ?>
			</div>
		</div>	
	</div>
</body>
</html>
