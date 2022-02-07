<?php

class TeaPropertiesDecorator extends TeaDecorator{
    public function __construct(Drinkables $decoratedTea){
        parent::__construct($decoratedTea);
    }
    private function BlackTea(){
        echo "this is black tea \n";
    }

    private function GreenTea(){
        echo "this is green tea \n";
    }

    public function getDrinkable()
    {
        $this->decoratedTea->getDrinkable();
        $this->BlackTea();
        $this->GreenTea();
    }

}