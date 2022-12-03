<?php

namespace App;


class TextMenuOutput implements MenuOutput
{
    public function view($products)
    {
       
        $menu = "ID\tNombre\t\tPrecio\n";
        $menu .= str_repeat('=', 30) . "\n";
        
        foreach($this->products as $product){
            $menu .= $product['id'] . "\t"
            . str_pad($product['name'], 15, '') . "\t"
            . $product['price'] . "\n";
        }
       return $menu;
    }
}