<?php

use MyBank\MyBankApi;


class Store
{
    protected $myBankApi;

    public function __contruct( PaymentProceso $paymentProceso)
    {
        $this->paymentProceso= $paymentProceso;
    }

    public function purchased()
    {
        $this->paymentProceso->charge();
    }
}