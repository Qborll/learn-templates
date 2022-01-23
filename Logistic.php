<?php 

namespace Factorymethod\Product;

require_once("Products.php");

abstract class Logistic {

    abstract function getProducts() : Products;

    public function deliverProducts($name,$date,$item){

        $product = $this->getProducts();

        $product->InformationaboutProduct($name,$date);

        $product->load();

        $product->delivery($item);
        
        $product->unload();

    }
}