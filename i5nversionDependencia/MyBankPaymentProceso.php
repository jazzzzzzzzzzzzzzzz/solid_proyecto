<?php

namespace App;

use MyBank\MyBanckApi;
use PaymentProceso;
use PayPal\PayPalApi;

class PayPalPaymentProcessor implements PaymentProceso
{
    /**
     * @var PayPalApi
     */
    protected $payPalApi;

    /**
     * Constructor.
     *
     * @param PayPalApi $payPalApi
     */
    public function __construct(MyBanckApi $payPalApi)
    {
        $this->payPalApi = $payPalApi;
    }

    /**
     * The client wants to pay something.
     *
     * @return void
     */
    public function pay()
    {
        $this->payPalApi->chargeCustomer();
    }
}