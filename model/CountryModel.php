<?php
class CountryModel
{
    public $string;
	public $listOfCountries;
 
    public function __construct(){
        $this->getData();
    }
	
	private function getData(){
		$con = conFatory();

		$result = mysqli_query($con,"SELECT * FROM country");
		
		$counter = 0;
		$this->listOfCountries = array();
		
		while($row = mysqli_fetch_array($result)) {
			$tmp = new Country($row['capital'],$row['car_code'],$row['datacode'],$row['gdp_agri'],$row['gdp_ind'],$row['gdp_serv'],$row['gdp_total'],$row['government'],$row['id'],$row['indep_date'],$row['infant_mortality'],$row['inflation'],$row['name'],$row['population'],$row['population_growth'],$row['total_area']);
			array_push($this->listOfCountries,$tmp);
			$counter++;
		}

		mysqli_close($con);
	}
	
	public function setData($objectToChange, $objectToChangeToo){
		if (in_array($objectToChange,$this->listOfCountries)){
			$key = array_search($objectToChange,$this->listOfCountries);
			$this->listOfCountries[$key] = $objectToChangeToo;
			
			$this->dbReplace($objectToChange->getId(), $objectToChangeToo->getName(), $objectToChangeToo->getCapital(), $objectToChangeToo->getPopulation());
		} else {
			echo "ERROR";
		}
	}
		
	private function dbReplace($searchKey, $name, $capital, $population){
		$con = conFatory();
		mysqli_query($con,"UPDATE country SET name='". $name ."', capital='". $capital ."', population=". $population ." WHERE id='". $searchKey. "'");
		mysqli_close($con);
	}
}