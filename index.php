<?php

require 'Pokemon.php';

$pikachu = new Pokemon('Pikachu', 100, 100);
echo "<p>Name: $pikachu->name</p>";
echo "<p>Hitpoints: $pikachu->hitpoints</p>";
echo "<p>Health: $pikachu->health</p>"  . "<br>";

$charmeleon = new Pokemon('Charmeleon', 100, 100);
echo "<p>Name: $charmeleon->name</p>";
echo "<p>Hitpoints: $charmeleon->hitpoints</p>";
echo "<p>Health: $charmeleon->health</p>"  . "<br>";

