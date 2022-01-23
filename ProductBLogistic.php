<?php 

namespace Factorymethod\Product;

require_once("Logistic.php");

require_once("ProductB.php");

class ProductBLogistic extends Logistic{

    public function getProducts(): Products
    {
            return new ProductB;
    }
}