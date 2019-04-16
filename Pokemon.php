<?php

class Pokemon {

	private $name;
	private $type;
	private $health;
    private $hitpoints;
	public $attacks;
    private $resistance;
    private $weakness;

	public function __construct($name, $type, $health, $hitpoints, $attacks, $resistance, $weakness)
    {
        $this->name = $name; 
        $this->type = $type;
        $this->health = $health;
        $this->hitpoints = $hitpoints;
        $this->attacks = $attacks;
        $this->resistance = $resistance;
        $this->weakness = $weakness;
    }

    public function getName()
    {
    	return $this->name;
    }

    public function getType()
    {
    	return $this->type->name;
    }

    public function getHealth()
    {
    	return $this->health;
    }

    public function doAttack($target, $attack)
    {
        $response = "";
        $response .= $this->name . " do " . $attack->name . "<br>";
        $damage = $attack->damage;
        if ($this->type->name == $target->weakness->type) {
            $damage = $attack->damage * $target->weakness->multiplier;
            $response .= "It's very effective!<br>";
        }elseif($this->type->name == $target->resistance->type) {
            $damage = $attack->damage / $target->resistance->value;
            $response .= "It isn't very effective!<br>";
        }
        $target->health = $target->health - $damage;
        //$health = $target->health - $damage;
        $response .= "HP after attack " . $target->health . "<br><br>";
        return $response;
    }
}
