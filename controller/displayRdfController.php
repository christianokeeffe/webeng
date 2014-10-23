<?php
class displayRdfController{
    private $graphDump;
    public function __construct($model) {
        $temp = $model->getGraph();
        $this->graphDump = $temp->dump('html');
    }

    function getDump()
    {
        return $this->graphDump;
    }
}
?>