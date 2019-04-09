<?php

class Pokemon {

	protected $name;
	protected $type;
	protected $health;
    protected $hitpoints;
	public $attacks;
    protected $resistance;
    protected $weakness;

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
        echo $this->name . " do " . $attack->name . "<br>";
        $damage = $attack->damage;
        if ($this->type->name == $target->weakness->type) {
            $damage = $attack->damage * $target->weakness->multiplier;
            echo "It's very effective!<br>";
        }elseif($this->type->name == $target->resistance->type) {
            $damage = $attack->damage / $target->resistance->value;
            echo "It isn't very effective!<br>";
        }
        $health = $target->health - $damage;
        echo "HP after attack " . $health . "<br><br>";
    }
}
