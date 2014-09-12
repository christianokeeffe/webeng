<?php
class countryView
{
    private $countryModel;
    private $countryController;
 
    public function __construct($countryController,$countryModel) {
        $this->countryController = $countryController;
        $this->countryModel = $countryModel;
    }
    
    public function output() {
    	echo "<table class=table table-striped table-bordered'>";
		echo "<thead><tr> <th>Name</th><th>Capital ID</th><th>Population</th></thead><tbody>";
    	foreach ($this->countryModel->listOfCountries as $country) {
    		?>
    			<tr>
    				<td><? echo $country->getName()?></td>
    				<td><? echo $country->getCapital()?></td>
    				<td><? echo $country->getPopulation()?></td>
    				<td><a href="?page=countryEdit&id=<?echo $country->getId();?>">Edit</a></td>
				</tr>
    		<?
    	}
    	echo "</tbody></table>";
    }
}
?>
