<?php
class editCountryView
{
    private $countryModel;
    private $country;
    private $countryController;
 
    public function __construct($countryController,$countryModel) {
        $this->countryController = $countryController;
        $this->countryModel = $countryModel;
        $this->country = $this->countryModel->getCountryByID($_GET['id']);
    }
    
    public function output() {
    	?>
            <form method="POST" action="?action=editDone">
            <input type="hidden" name="countryID" value="<?echo $this->country->getId();?>">
            <input type="text" name="name" value="<?echo $this->country->getName();?>">
            <input type="text" name="capital" value="<?echo $this->country->getCapital();?>">
            <input type="text" name="population" value="<?echo $this->country->getPopulation();?>">
            <input type="submit" value="Save changes">
            </form> 
        <?
    }
}