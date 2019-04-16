<?php

class Charmeleon extends Pokemon{

    function __construct($name){
        parent::__construct(
        	$name,
        	new EnergyType(EnergyType::FIRE), 
        	60, 
        	60, 
        	[new Attack('Head butt', 10),
            new Attack('Flare', 30)],
        	new Resistance(EnergyType::LIGHTNING, 10), 
        	new Weakness(EnergyType::WATER, 2)
        );
    }
}