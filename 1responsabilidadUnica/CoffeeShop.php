<?php

namespace App;

class CoffeeeShop{

    protected $products = []; 


    public function addProducts($product = [])
    
    {
        $this->products = $product;
    }

    public function getProducts()
    {
        return $this->products;
    }

    public function removeProduct($id)
    {
//Lógica para poder borrar producto
    }

}

