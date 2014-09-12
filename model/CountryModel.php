<?php
include("metadata/CountryMetaData.php");
class Model
{
    public $string;
	public $listOfCountries;
	private $con;
 
    public function __construct(){
        $this->getData();
		$con=mysqli_connect("localhost","root","root","mondial");
		// Check connection
		if (mysqli_connect_errno()) {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		mysqli_close($con);
    }
	
	private function getData(){
		mysqli_open($con);

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
			$this->listOfCountries[$key]->id = $objectToChangeToo->id;
			$this->listOfCountries[$key]->name = $objectToChangeToo->name;
			$this->listOfCountries[$key]->capital = $objectToChangeToo->capital;
			$this->listOfCountries[$key]->population = $objectToChangeToo->population;
			
			$this->dbReplace($objectToChange->id, $objectToChangeToo->id, $objectToChangeToo->name, $objectToChangeToo->capital, $objectToChangeToo->population);
		} else {
			echo "ERROR";
		}
	}
		
	private function dbReplace($searchKey, $id, $name, $capital, $population){
		mysqli_open($con);
		mysqli_query($con,"UPDATE country SET id=". $id ."AND name=". $name ."AND capital=". $capital ."AND population=". $population ."WHERE id=". $searchKey);
		mysqli_close($con);
	}
}