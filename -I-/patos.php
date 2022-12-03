<?php

//crearemos las interfazes para la clase pato
interface CanFloat{
    public function float();
}
interface CanQuack{
    public function float();
}
interface CanPlay{
    public function play();
}

class Duck implements CanFloat, CanQuack, CanPlay{
    public function float(){
        echo "El pato esta flotando";
    }
    public function quack(){
        echo "el pato esta haciendo quack";
    }
    public function play(){
        $this->float();
        $this->quack();
    }

}

class WoodenDuck implements CanFloat{
    public function float(){
        echo "el pato de madera esta flotando";
    }
    public function play(){
        $this->float();
    }
}

class Pond{
    public function sendToPlay(CanPlay $duck){
        $duck->play();
    }

}