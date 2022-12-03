<?php

class MyBankPaymentProceso implements PaymentProceso{
    public function __contruct(myBankApi $myBankApi){
        $this->myBankApi= $myBankApi;
    }
    
    public function pay(){
        $this->myBankApi->charge();
    }

}