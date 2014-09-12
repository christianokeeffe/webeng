<?php
include("Model/CountryModel.php");
class Model
{
    public $string;
	public $listOfCountries;
 
    public function __construct(){
        $this->string = "MVC + PHP = Awesome, click here!";
        $this->getData();
    }
	
	private function getData(){
		$con=mysqli_connect("localhost","root","root","mondial");
		
		// Check connection
		if (mysqli_connect_errno()) {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

		$result = mysqli_query($con,"SELECT * FROM country");
		
		$counter = 0;
		$this->listOfCountries = array();
		
		while($row = mysqli_fetch_array($result)) {
			$tmp = new Country($row['name'],$row['capital'],$row['population']);
			array_push($this->listOfCountries,$tmp);
			$counter++;
		}

		mysqli_close($con);
	}
}