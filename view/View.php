<?php
class View
{
    private $model;
    private $controller;
    private $countryView;

    public function __construct($controller,$model) {
        $this->controller = $controller;
        $this->model = $model;
        $this->countryView = new countryView($controller,$model);
    }
 
    public function output() {
        $this->countryView->listCountrys();
    } 
}