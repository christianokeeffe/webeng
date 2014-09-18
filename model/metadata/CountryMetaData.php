<?php
class Country{
	private $capital;
	private $carcode;
	private $datacode;
	private $gdp_agri;
	private $gdp_ind;
	private $gdp_serv;
	private $gdp_total;
	private $goverment;
	private $id;
	private $indep_date;
	private $infant_mortality;
	private $inflation;
	private $name;
	private $population;
	private $population_growth;
	private $total_area;
	
	public function __construct($capital,$carcode,$datacode,$gdp_agri,$gdp_ind,$gdp_serv,$gdp_total,$goverment,$id,$indep_date,$infant_mortality,$inflation,$name,$population,$population_growth,$total_area){
		$this->capital = $capital;
		$this->carcode = $carcode;
		$this->datacode = $datacode;
		$this->gdp_agri = $gdp_agri;
		$this->gdp_ind = $gdp_ind;
		$this->gdp_serv = $gdp_serv;
		$this->gdp_total = $gdp_total;
		$this->goverment = $goverment;
		$this->id = $id;
		$this->indep_date = $indep_date;
		$this->infant_mortality = $infant_mortality;
		$this->inflation = $inflation;
		$this->name = $name;
		$this->population = $population;
		$this->population_growth = $population_growth;
		$this->total_area = $total_area;
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