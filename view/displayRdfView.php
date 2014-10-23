<?php
class displayRdfView{
    private $controller;

    public function __construct($controller) {
        $this->controller = $controller;
    }
    function output() {
        echo $this->controller->getDump();
    }
}
?>