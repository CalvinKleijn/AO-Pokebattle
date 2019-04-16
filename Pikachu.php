<?php

class Pikachu extends Pokemon{

    function __construct($name){
        parent::__construct(
        	$name,
        	new EnergyType(EnergyType::LIGHTNING),
        	60, 
        	60, 
        	[new Attack('Electric Ring', 50), 
            new Attack('Pika Punch', 20)],
        	new Resistance(EnergyType::FIGHTING, 20), 
        	new Weakness(EnergyType::FIRE, 1.5) 
        );
    }
}