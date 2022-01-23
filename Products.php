<?php 

namespace Factorymethod\Product;

interface Products {

    public function InformationaboutProduct($name,$date);

    public function load();

    public function delivery($item);

    public function unload();
}