<?php
require_once '../Services/UserService.php';

class UserController
{
    private $userService = new UserService();

    public function register($name, $email, $phoneNumber, $password, $subscribed)
    {
        $this->userService->register($name, $email, $phoneNumber, $password, $subscribed);
    }

    public function logIn($email, $password)
    {
        $this->userService->logIn($email, $password);
    }

    public function addObserver($id) 
    {
        $this->userService->addObserver($id);
    }
}