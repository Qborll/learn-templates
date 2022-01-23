<?php

namespace Factorymethod\Product;

require_once("Products.php");


class ProductB implements Products{

    public function InformationaboutProduct($name,$date)
    {
        echo " Product name - $name, year of issue - $date; \n";
    }

    public function load()
    {
        echo "Product load; \n";
    }

    public function delivery($item)
    {

        echo "Product $item delivery; \n";
    }

    public function unload()
    {
        echo "Product unload; \n";
    }
}