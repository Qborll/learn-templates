<?php 

namespace Factorymethod\Product;

require_once("ProductALogistic.php");
require_once("ProductBLogistic.php");
require_once("Logistic.php");

function userCode(Logistic $logistic,$name,$date,$item){

    $logistic->deliverProducts($name,$date,$item);
}

userCode(new ProductALogistic,"Phone ","22-08-2008 ","№12 ");

echo "\n";

userCode(new ProductBLogistic,"Mac Book ","12-06-2022 ","№11");
