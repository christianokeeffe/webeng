<?php
include("metadata/CountryMetaData.php");
include("SQLConnect.php");
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
			$tmp = new Country($row['id'],$row['name'],$row['capital'],$row['population']);
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
		mysqli_query($con,"UPDATE country SET name=". $name ."AND capital=". $capital ."AND population=". $population ."WHERE id=". $searchKey);
		mysqli_close($con);
	}
}