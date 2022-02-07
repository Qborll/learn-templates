<?php

class TeaPropertiesDecorator extends TeaDecorator{
    public function __construct(TeaDecorator $decoratedTea){
        parent::__construct($decoratedTea);
    }
    private function BlackTea(){
        echo "this is black tea";
    }

    private function GreenTea(){
        echo "this is green tea";
    }

    public function getDrinkable()
    {
        $this->decoratedTea->getDrinkable();
        $this->BlackTea();
        $this->GreenTea();
    }

}