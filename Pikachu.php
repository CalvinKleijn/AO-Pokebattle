<?php

class Pikachu extends Pokemon{

    function __construct($name){
        parent::__construct(
        	$name,
        	new EnergyType('Lightning'),
        	60, 
        	60, 
        	[new Attack('Electric Ring', 50), 
            new Attack('Pika Punch', 20)],
        	new Resistance('Fighting', 20), 
        	new Weakness('Fire', 1.5) 
        );
    }
}