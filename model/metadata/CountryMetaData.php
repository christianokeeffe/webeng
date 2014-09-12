<?php
class Country{
	private $id;
	private $name;
	private $capital;
	private $population;
	
	public function __construct($i, $n, $c, $p){
		$this->id = $id;
		$this->name = $n;
		$this->capital = $c;
		$this->population = $p;
	}
	
	public function getId(){
		return $this->id;
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