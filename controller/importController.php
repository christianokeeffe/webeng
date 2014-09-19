<?php
class ImportController
{
    private $model;
    public $status;
    private $xml;
 
    public function __construct($model){
        $this->model = $model;
        $this->status = "init";
        $this->extrated_countries = array();
    	
        if(isset($_FILES["InputFile"]))
    	{
            $this->xml=simplexml_load_file($_FILES["InputFile"]["tmp_name"]);
            $this->status = "uploaded";

	    	$this->counter = 0;

	    	foreach ($this->xml->children() as $child) {
	    		switch($child->getName()){
	    			case "country":
	    				$this->capital= "";
	    				$this->carcode= "";
						$this->datacode= "";
						$this->gdp_agri= "";
						$this->gdp_ind= "";
						$this->gdp_serv= "";
						$this->gdp_total= "";
						$this->goverment= "";
						$this->id= "";
						$this->indep_date= "";
						$this->infant_mortality= "";
						$this->inflation= "";
						$this->name= "";
						$this->population= "";
						$this->population_growth= "";
						$this->total_area= "";

	    				foreach ($child->attributes() as $countryData){
	    					switch($countryData->getName()){
	    						case "capital":
	    							$this->capital = $countryData;
	    							break;
	    						case "carcode":
	    							$this->carcode = $countryData;
	    							break;
	    						case "datacode":
	    							$this->datacode = $countryData;
	    							break;
	    						case "gdp_agri":
	    							$this->gdp_agri = $countryData;
	    							break;
	    						case "gdp_ind":
	    							$this->gdp_ind = $countryData;
	    							break;
	    						case "gdp_serv":
	    							$this->gdp_serv = $countryData;
	    							break;
	    						case "gdp_total":
	    							$this->gdp_total = $countryData;
	    							break;
	    						case "goverment":
	    							$this->goverment = $countryData;
	    							break;
	    						case "id":
	    							$this->id = $countryData;
	    							break;
	    						case "indep_date":
	    							$this->indep_date = $countryData;
	    							break;
	    						case "infant_mortality":
	    							$this->infant_mortality = $countryData;
	    							break;
	    						case "inflation":
	    							$this->inflation = $countryData;
	    							break;
	    						case "name":
	    							$this->name = $countryData;
	    							break;
	    						case "population":
	    							$this->population = $countryData;
	    							break;
	    						case "population_growth":
	    							$this->population_growth = $countryData;
	    							break;
	    						case "total_area":
	    							$this->total_area = $countryData;
	    							break;
	    					}
	    				}
	    			$this->extrated_countries[$this->counter] = new Country($this->capital,$this->carcode,
	    																	$this->datacode,$this->gdp_agri,
	    																	$this->gdp_ind,$this->gdp_serv,
	    																	$this->gdp_total,$this->goverment,
	    																	$this->id,$this->indep_date,
	    																	$this->infant_mortality,
	    																	$this->inflation,$this->name,
	    																	$this->population,
	    																	$this->population_growth,
	    																	$this->total_area);
	    			$this->counter++;
	    			break;
	    		}
    		}
    	}
    	$this->model->insertToDb("country",$this->extrated_countries);
    }
}