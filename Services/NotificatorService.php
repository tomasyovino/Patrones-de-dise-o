<?php
include_once '../Repository/ObserverRepository.php';
include_once './Observer/ObserverServices/EmailSender.php';
include_once './Observer/ObserverServices/PhoneMessageSender.php';

class NotificatorService
{
    private $emailSender = new EmailSender();
    private $phoneMessageSender = new PhoneMessageSender();

    public function sendOrder($email, $order)
    {
        $this->emailSender->sendEmail($email, $order);
        return "Email sended";
    }

    public function notify($users, $message) {
        foreach ($users as $user) {
            $email = $user->$email;
            $phoneNumber = $user->$phoneNumber;
            $this->emailSender->sendEmail($email, $message);
            $this->phoneMessageSender->sendPhoneMessage($phoneNumber, $message);
        }
    }
}