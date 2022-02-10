<?php



$model = new Model();
$controller = new Controller($model);
$View = new View($controller,$model);

echo $View->output() . "\n";