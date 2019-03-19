<?php

class Pokemon 
{
	public $name;
	public $hitpoints;
	public $health;

	public function __construct($name,$hitpoints,$health)
	{
		$this->name = $name;
		$this->hitpoints = $hitpoints;
		$this->health = $health;
	}
}