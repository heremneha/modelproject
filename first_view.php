<?php
require_once "first_model.php";
require_once "first_controller.php";

class View
{
    private $model;
    private $controller;
    public function __construct($controller,$model)
    {
        $this->controller = $controller;
        $this->model = $model;
    }
    public function output()
    {
        return "<p> ". $this->model->string."</p>";
    }
}
?>