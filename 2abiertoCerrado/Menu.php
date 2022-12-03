<?php

namespace App;

class Menu{

    public function view($products, $output)
    {
        return $output->output($products);
    }
}