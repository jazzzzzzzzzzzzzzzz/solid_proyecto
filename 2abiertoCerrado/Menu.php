<?php

namespace App;

class Menu{

    public function view($products, $json= false, $html = false)
    {
        $menu = '';

        if($json){
            $menu = json_encode($products);
        }else{
            $menu .= "ID\tNombre\t\tPrecio\n";
            $menu .= str_repeat('=', 30) . "\n";
            
            foreach($this->products as $product){
                $menu .= $product['id'] . "\t"
                . str_pad($product['name'], 15, '') . "\t"
                . $product['price'] . "\n";
            }

        }
    
        return $menu;
    }
}