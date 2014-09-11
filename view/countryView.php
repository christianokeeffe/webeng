<?php
class countryView
{
    private $countryModel;
    private $countryController;
 
    public function __construct($countryController,$countryModel) {
        $this->countryController = $countryController;
        $this->countryModel = $countryModel;
    }
    
    public function listCountrys()
    	foreach ($countries as $country) {
    		# code...
    	}
}