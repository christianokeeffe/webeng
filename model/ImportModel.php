<?php
class ImportModel
{
    public $string;
	public $listOfCountries;
 
    public function __construct(){
        $this->getData();
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