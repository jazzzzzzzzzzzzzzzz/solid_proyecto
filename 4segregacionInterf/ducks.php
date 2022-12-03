<?php

//crearemos las interfazes de puedo flotar
//crearemos las interfazes de puedo hacer cuak

use CanPlay as GlobalCanPlay;
use WoodenDuck as GlobalWoodenDuck;

interface CanPlay
{
    public function play();
}

interface CanFloat
{
    public function float();
}


interface CanQuack
{
    public function float();
}



class Duck implements CanFloat, CanQuack, CanPlay
{
    public function float(){
        echo "El pato puede flotar";
    }
    public function quack(){
        echo "El pato puede hacer cuak";
    }
    public function play(){
        $this->float();
        $this->quack();
    }

}

class WoodenDuck implements CanFloat
{
    public function float()
    {
        echo "el pato de madera esta flotando";
    }

    public function play()
    {
        $this->float();
    }
}

class Frog implements CanPlay
{
    public function play()
    {
        echo"La rana esta jugando";
    }
}

class Pond{
    public function sendToPlay(CanPlay $duck){
        $duck->play();
    }

}


$pond = new Pond();
$pond->sendToPlay(new Duck());
$pond->sendToPlay(new Frog());
