<?php 

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$tea= new TeaPropertiesDecorator(new Tea);

echo $tea->getDrinkable();

