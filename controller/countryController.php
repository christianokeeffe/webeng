<?php
class CountryController
{
    private $model;
    public $isDone = false;
 
    public function __construct($model){
        $this->model = $model;
        if(isset($_GET['action']))
        {
        	if($_GET['action'] == "editDone")
        	{
        		$oldCountry = $this->getCountryByID($_POST['countryID']);
        		$country = new Country($_GET['countryID'], $_GET['name'], $_GET['capital'], $_GET['population']);
        		$this->model->setData($oldCountry,$country);
        		$this->isDone = true;
        	}
        }
    }

    public function getCountryByID($id)
    {
    	$i = 0;
    	while($i < count($this->model->listOfCountries) && $this->model->listOfCountries[$i]->getId() != $id)
    	{
    		$i++;
    	}

    	if($i < count($this->model->listOfCountries))
    	{
    		return $this->model->listOfCountries[$i];
    	}
    	return null;
    }
}