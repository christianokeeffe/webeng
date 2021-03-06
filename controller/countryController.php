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
        		$country = new Country($_POST['capital'], $oldCountry->getCarcode, $oldCountry
                ->getDatacode(), $oldCountry->getGdp_agri(), $oldCountry->getGdp_ind(), $oldCountry->getGdp_serv(), $oldCountry->getGdp_total(), $oldCountry->getGoverment(), $_POST['countryID'], $oldCountry->getIndep_date(), $oldCountry->getInfant_mortality(), $oldCountry->getInflation(), $_POST['name'], $_POST['population'], $oldCountry->getPopulation_growth(), $oldCountry->getTotal_area());
        		$this->model->setData($country);
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