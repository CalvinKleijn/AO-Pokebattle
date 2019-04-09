<?php

class Charmeleon extends Pokemon{

    function __construct($name){
        parent::__construct(
        	$name,
        	new EnergyType('Fire'), 
        	60, 
        	60, 
        	[new Attack('Head butt', 10),
            new Attack('Flare', 30)],
        	new Resistance('Lightning', 10), 
        	new Weakness('Water', 2)
        );
    }
}