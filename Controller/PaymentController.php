<?php
include_once '../Services/PaymentService.php';
include_once "../Services/Strategy/PaymentService/BankTransferStrategy.php";
include_once "../Services/Strategy/PaymentService/CreditCardStrategy.php";

class PaymentController
{
    private $paymentService;

    public function __construct(PaymentService $paymentService)
    {
        $this->paymentService = $paymentService;
    }

    public function processPayment($amount)
    {
        $this->paymentService->paymentProcess($amount);

        $message = "Su compra ha sido procesada correctamente";
        // $this->observerService->notify($message);
    }
}