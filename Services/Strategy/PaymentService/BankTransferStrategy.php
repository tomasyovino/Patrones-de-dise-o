<?php
include_once '../../PaymentService.php';

class BankTransferStrategy implements PaymentService
{
    public function paymentProcess($amount)
    {
        // Implements payment logic with bank transfer
    }
}