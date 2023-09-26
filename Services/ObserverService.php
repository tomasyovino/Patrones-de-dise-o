<?php
include_once '../Repository/ObserverRepository.php';
include_once './Observer/ObserverServices/EmailSender.php';
include_once './Observer/ObserverServices/PhoneMessageSender.php';

class ObserverService
{
    private $observerRepository;

    public function __construct($observerRepository)
    {
        $this->observerRepository = ObserverRepository::getInstance();
    }

    public function addObserver($id)
    {
        $observer = $this->observerRepository->create($id);
    }

    public function notify($message)
    {
        $observers = $this->observerRepository->findAll();
        foreach ($observers as $observer) {
            $observer->sendEmail($message);
            $observer->sendPhoneMessage($message);
        }
    }
}