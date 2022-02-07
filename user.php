<?php 

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$tea= new TeaPropertiesDecorator(new Tea);

$coffee = new CoffePropertiesDecorator(new Coffee);

echo $tea->getDrinkable();

echo $coffee->getDrinkable();


