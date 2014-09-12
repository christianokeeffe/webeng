<?php
class editCountryView
{
    private $countryModel;
    private $country;
    private $countryController;
 
    public function __construct($countryController,$countryModel) {
        $this->countryController = $countryController;
        $this->countryModel = $countryModel;
        $this->country = $this->countryController->getCountryByID($_GET['id']);
    }
    
    public function output() {
    	if($this->countryController->isDone == true)
        {
            echo "It has been edited";
        }
        else
        {
        ?>
            <form role="form" method="POST" action="?action=editDone&page=countryEdit">
            <input type="hidden" name="countryID" value="<?echo $this->country->getId();?>">
            <input type="text" class="form-control" name="name" value="<?echo $this->country->getName();?>">
            <input type="text" class="form-control" name="capital" value="<?echo $this->country->getCapital();?>">
            <input type="text" class="form-control" name="population" value="<?echo $this->country->getPopulation();?>">
            <input type="submit" class="form-control" value="Save changes">
            </form> 
        <?
        }
    }
}