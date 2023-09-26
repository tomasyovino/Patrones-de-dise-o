<?php
include_once '../Services/PaymentService.php';
include_once '../Services/NotificatorService.php';
include_once "../Services/Strategy/PaymentService/BankTransferStrategy.php";
include_once "../Services/Strategy/PaymentService/CreditCardStrategy.php";

class PaymentController
{
    private $paymentService;
    private $notificatorService;

    public function __construct(PaymentService $paymentService, NotificatorService $notificatorService)
    {
        $this->paymentService = $paymentService;
        $this->notificatorService = $notificatorService;
    }

    public function processPayment($id, $amount)
    {
        $this->paymentService->paymentProcess($amount);
        
        $order = "Su compra ha sido procesada correctamente";
        $this->notificatorService->sendOrder($id, $order);
    }
}