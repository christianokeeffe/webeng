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
		?>
        <div class="row">
            <div class="col-md-9    ">
    	       <table class="table table-striped table-bordered">
    	           <thead>
    			        <tr>
    			        <th>Name</th>
                        <th>Capital ID</th>
    				    <th>Population</th>
    				    <th>Action</th>
    	   </thead>
    	   <tbody>
		<?
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
    	?>
                    </tbody>
                </table>
            </div>
        </div>
        <?
    }
}
?>
