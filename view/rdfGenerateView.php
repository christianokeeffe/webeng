<?php
class rdfGenerateView
{
	private $generateModel;
    private $generateController;

    public function __construct($generateController,$generateModel) {
		$this->generateController = $generateController;
        $this->generateModel = $generateModel;
    }
    
    public function output() {
		$this->generateController->countriesToRDF("rdfexport.rdf");
    	echo "Exported countries to rdfexport.rdf";
    }
}

