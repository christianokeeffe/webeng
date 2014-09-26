<?php
class Country implements JsonSerializable{
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

	public function __get($capital) {
    $this->capital;
  }
  public function jsonSerialize() {
        $json = array();
	    foreach($this as $key => $value) {
	        $json[$key] = $value;
	    }
	    return $json; // or json_encode($json)
    }

	public function getCapital(){return $this->capital;}
	public function getCarcode(){return $this->carcode;}
	public function getDatacode(){return $this->datacode;}
	public function getGdp_agri(){return $this->gdp_agri;}
	public function getGdp_ind(){return $this->gdp_ind;}
	public function getGdp_serv(){return $this->gdp_serv;}
	public function getGdp_total(){return $this->gdp_total;}
	public function getGoverment(){return $this->goverment;}
	public function getId(){return $this->id;}
	public function getIndep_date(){return $this->indep_date;}
	public function getInfant_mortality(){return $this->infant_mortality;}
	public function getInflation(){return $this->inflation;}
	public function getName(){return $this->name;}
	public function getPopulation(){return $this->population;}
	public function getPopulation_growth(){return $this->population_growth;}
	public function getTotal_area(){return $this->total_area;}

	public function APISetName($name){$this->$name = $name;}
	public function APISetID($id){$this->$id = $id;}
	public function APISetCapital($capital){$this->$capital = $capital;}
	public function APISetPopulation($population){$this->$population = $population;}
}
?>