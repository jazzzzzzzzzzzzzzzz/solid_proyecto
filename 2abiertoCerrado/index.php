<?php include_once 'vendor/autoload';

use App\CoffeeeShop;
use App\Menu;


$products = [
    ['id' => 1, 'name' => 'Negro', 'price' => 25],
    ['id' => 2, 'name' => 'Latté', 'price' => 35],
    ['id' => 3, 'name' => 'Capuchino', 'price' => 45],
];

$shop = new CoffeeeShop();


$shop->addProducts($products);

$menu = new Menu();

echo $menu->view($shop->getProducts());