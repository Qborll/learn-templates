<?php 

class CoffePropertiesDecorator extends CoffeeDecorator{
    public function __construct(Drinkables $decoratedCoffee){
        parent::__construct($decoratedCoffee);
    }
    private function GroundCoffee(){
        echo "this is ground coffee";
    }

    private function InstantCoffee(){
        echo "this is instant coffee";
    }

    public function getDrinkable()
    {
        $this->decoratedTea->getDrinkable();
        $this->GroundCoffee();
        $this->InstantCoffee();
    }

}