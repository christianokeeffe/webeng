<?php
class ImportController
{
    private $model;
    public $status;
    private $xml;
 
    public function __construct($model){
        $this->model = $model;
        $this->status = "init";
        $this->extrated_continents = array();
        $this->extrated_countries = array();
        $this->extrated_cities = array();
    	
        if(isset($_FILES["InputFile"]))
    	{
            $this->xml=simplexml_load_file($_FILES["InputFile"]["tmp_name"]);
            $this->status = "uploaded";

	    	$this->counter = 0;
	    	$this->citycounter = 0;
	    	$this->continentcounter = 0;

	    	foreach ($this->xml->children() as $child) {
	    		switch($child->getName()){
	    			case "continent":
	    				$this->continentname= "";
	    				$this->continentid= "";
	    				foreach ($child->attributes() as $continentData){
	    					switch($continentData->getName()){
	    						case "name":
	    							$this->continentname = $continentData;
	    							break;
    							case "id":
	    							$this->continentid = $continentData;
	    							break;
	    						}
    					}

    					$this->extrated_continents[$this->continentcounter] = new Continent($this->continentid,$this->continentname);
						$this->continentcounter++;
	    				break;
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

						foreach ($child as $citychild) {
	    					switch($citychild->getName()){
    							case "city":
									$citycountry = "";
									$cityid = "";
									$citylatitude = "";
									$citylongtitude = "";
									$cityname = "";
									$cityprovince = "";

									foreach ($citychild as $citycitychild) {
	    								switch($citycitychild->getName()){
    									case "name":
    										$cityname = trim($citycitychild);
    										break;
    									}
    								}

	    							foreach ($citychild->attributes() as $cityData){
				    					switch($cityData->getName()){
				    						case "id":
				    							$cityid = $cityData;
				    							break;
			    							case "country":
			    								$citycountry = $cityData;
			    								break;
		    								case "latitude":
		    									$citylatitude = $cityData;
    											break;
											case "longitude":
												$citylongtitude = $cityData;
												break;
											case "name":
												$cityname = $cityData;
												break;
											case "province":
												$cityprovince = $cityData;
												break;
				    					}
				    				}
		    					$this->extrated_cities[$this->citycounter] = new City($citycountry,$cityid,$citylatitude,$citylongtitude,$cityname,$cityprovince);
	    						$this->citycounter++;
	    						break;
	    						case "province":
		    						foreach ($citychild as $provincechild) {
				    					switch($provincechild->getName()){
			    							case "city":
												$citycountry = "";
												$cityid = "";
												$citylatitude = "";
												$citylongtitude = "";
												$cityname = "";
												$cityprovince = "";

												foreach ($provincechild as $citycitychild) {
				    								switch($citycitychild->getName()){
			    									case "name":
			    										$cityname = trim($citycitychild);
			    										break;
			    									}
			    								}

				    							foreach ($provincechild->attributes() as $cityData){
							    					switch($cityData->getName()){
							    						case "id":
							    							$cityid = $cityData;
							    							break;
						    							case "country":
						    								$citycountry = $cityData;
						    								break;
					    								case "latitude":
					    									$citylatitude = $cityData;
			    											break;
														case "longitude":
															$citylongtitude = $cityData;
															break;
														case "name":
															$cityname = $cityData;
															break;
														case "province":
															$cityprovince = $cityData;
															break;
							    					}
							    				}
					    					$this->extrated_cities[$this->citycounter] = new City($citycountry,$cityid,$citylatitude,$citylongtitude,$cityname,$cityprovince);
				    						$this->citycounter++;
				    						break;
				    					}
				    				}
	    					}
	    				}

	    				foreach ($child->attributes() as $countryData){
	    					switch($countryData->getName()){
	    						case "capital":
	    							$this->capital = $countryData;
	    							break;
	    						case "car_code":
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
	    						case "government":
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
    		$this->model->insertToDb("country",$this->extrated_countries);
    		$this->model->insertToDb("continent",$this->extrated_continents);
    		$this->model->insertToDb("city",$this->extrated_cities);
    	}
    	
    }
}