<?php
include_once "../../PaymentService.php";
class CreditCardStrategy implements PaymentService
{
    public function paymentProcess($amount)
    {
        // Implements payment logic with credit card
    }
}