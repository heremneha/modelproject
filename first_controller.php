<?php
require_once "first_model.php";
class Controller
{
    private $model;
    public function __construct($model)
    {
        $this->model = $model;
    }
}
?>