<?php

function autoloader($class) {
    include  $class . '.php';
}
spl_autoload_register('autoloader');

$model = new Model();
$controller = new Controller($model);
$View = new View($controller,$model);

if(isset($_GET['action']) && !empty($_GET['action'])){
    $controller->{$_GET['action']}();

}
echo $View->output() . "\n";