<?php
class ImportController
{
    private $model;
    public $status;
    private $xml;
 
    public function __construct($model){
        $this->model = $model;
        $this->status = "init";
    	
        if(isset($_FILES["InputFile"]))
    	{
            $this->xml=simplexml_load_file($_FILES["InputFile"]["tmp_name"]);
            $this->status = "uploaded";
    	}
    }
}