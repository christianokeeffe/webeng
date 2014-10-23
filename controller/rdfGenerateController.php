<?php
class rdfGenerateController
{
	//private $this->model;
 
    public function __construct($model){
        $this->model = $model;
    }
	
	public function countriesToRDF($filename)
	{
		$file = fopen($filename, "w") or die("Unable to open file!");
		
		fwrite($file, "<?xml version=\"1.0\"?>". PHP_EOL . "<rdf:RDF xmlns:rdf=\"http://www.w3.org/1999/02/22-rdf-syntax-ns#\"". PHP_EOL . "xmlns:cont=\"http://localhost/webeng/MVC.php?page=country#\">". PHP_EOL);
		
		foreach ($this->model->listOfCountries as $country) {
    			fwrite($file, "<rdf:Description rdf:about=\"http://localhost/webeng/MVC.php?page=country&amp;id=".$country->getId()."\">". PHP_EOL);
    			fwrite($file, "<cont:name>".$country->getName()."</cont:name>". PHP_EOL);
    			fwrite($file, "<cont:capital>".$country->getCapital()."</cont:capital>". PHP_EOL);
    			fwrite($file, "<cont:population>".$country->getPopulation()."</cont:population>". PHP_EOL);
    			fwrite($file, "</rdf:Description>". PHP_EOL. PHP_EOL);
    	}
    	fwrite($file, "</rdf:RDF>");

		fclose($file);
	}

}