<?php 

namespace Factorymethod\Product;

require_once("Logistic.php");

require_once("ProductA.php");

class ProductALogistic extends Logistic{

    public function getProducts(): Products
    {
        return new ProductA;
    }
}