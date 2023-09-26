<?php
require_once '../Services/ObserverService.php';

class ObserverController
{
    private $observerService = new ObserverService();

    public function addObserver($id)
    {
        $this->observerService->addObserver($id);
    }

    public function notify($message)
    {
        $this->observerService->notify($message);
    }
}