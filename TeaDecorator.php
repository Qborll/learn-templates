<?php

abstract class TeaDecorator implements Drinkables{
    protected $decoratedTea;

    public function __construct(Drinkables $decoratedTea)
    {
        $this->decoratedTea=$decoratedTea;
    }
    public function getDrinkable(){
        $this->decoratedTea->getDrinkable();
    }
}