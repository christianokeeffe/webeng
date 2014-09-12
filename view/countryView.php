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
    	echo "<table>";
    	foreach ($this->countryModel->listOfCountries as $country) {
    		?>
    			<tr>
    				<td><?echo $country->getName()?></td>
    				<td><?echo $country->getCapital()?></td>
    				<td><?echo $country->getPopulation()?></td>
    				<td><a href="?page=countryEdit&id=<?echo $country->getId();?>">Edit</a></td>
				</tr>
    		<?php
    	}
    	echo "</table>";
    }
}
?>
