<?php
class displayRdfModel
{
    public $graph;

    public function __construct($path) {

        $this->graph = new EasyRdf_Graph("http://localhost/webeng/".$path);
        $this->graph->load();
    }

    public function getGraph(){
        return $this->graph;
    }
}
?>