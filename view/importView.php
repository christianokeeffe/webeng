<?php
class importView
{
    private $importModel;
    private $importController;
 
    public function __construct($importController,$importModel) {
        $this->importController = $importController;
        $this->importModel = $importModel;
		
    }
    
    public function output() {
    	switch ($this->importController->status) {
            case "init":
                   ?> 
                   <form role="form" action="#" method="post"
                    enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="InputFile">File input</label>
                        <input type="file" name="InputFile" id="InputFile">
                        <p class="help-block">Only XML-files</p>
                      </div>
                      <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                    <?
                break;
            case "uploaded":
                echo "The file has been uploaded";
                break;
            default:
                echo "ERROR";
                break;
        }
    }
}