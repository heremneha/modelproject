<?php
require_once "first_controller.php";
require_once "first_view.php";
$model = new Model();
$controller = new Controller($model);
$view = new View($controller, $model);
echo $view->output();
?>