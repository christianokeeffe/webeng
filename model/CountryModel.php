<?php
class Country{
	private $name;
	private $capital;
	private $population;
	
	public function __construct($n, $c, $p){
		$this->name = $n;
		$this->capital = $c;
		$this->population = $p;
	}
	
	public function getName(){
		return $this->name;
	}
	
	public function getCapital(){
		return $this->capital;
	}
	
	public function getPopulation(){
		return $this->population;
	}
}
?>