<?php 

class CoffePropertiesDecorator extends CoffeeDecorator{
    public function __construct(Drinkables $decoratedCoffee){
        parent::__construct($decoratedCoffee);
    }
    private function GroundCoffee(){
        echo "this is ground coffee \n";
    }

    private function InstantCoffee(){
        echo "this is instant coffee \n";
    }

    public function getDrinkable()
    {
        $this->decoratedCoffee->getDrinkable();
        $this->GroundCoffee();
        $this->InstantCoffee();
    }

}