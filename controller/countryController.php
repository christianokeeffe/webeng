<?php
class CountryController
{
    private $model;
 
    public function __construct($model){
        $this->model = $model;
    }

    public function getCountryByID($id)
    {
    	$i = 0;
    	while($i < $model->listOfCountries->length && $model->listOfCountries[$i]->getId() != $id)
    	{
    		$i++;
    	}

    	if($i < $model->listOfCountries->length)
    	{
    		return $model->listOfCountries[$i];
    	}
    	return null;
    }
}