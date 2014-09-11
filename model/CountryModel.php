<?php
class Country{
	public $name;
	public $capital;
	public $population;
	
	public function __contruct($n, $c, $p){
		$this->name = $n;
		$this->capital = $c;
		$this->population = $p;
	}
	
	public function getName(){
		return this->name;
	}
	
	public function getCapital(){
		return this->capital;
	}
	
	public function getPopulation(){
		return this->population;
	}
}
?>