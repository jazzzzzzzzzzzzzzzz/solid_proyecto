<?php

use MyBank\MyBankApi;

//clase tienda
class Store{
    protected $myBankApi;
    public function __contruct( PaymentProceso $paymentProceso){
        $this->paymentProceso= $paymentProceso;
    }

    public function purchased(){
        $this->paymentProceso->charge();
    }
}