<?php 

abstract class CoffeeDecorator implements Drinkables{
    protected $decoratedCoffee;

    public function __construct(Drinkables $decoratedCoffee)
    {
        $this->decoratedCoffee=$decoratedCoffee;
    }
    public function getDrinkable(){
        $this->decoratedCoffee->getDrinkable();
    }
}