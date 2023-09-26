<?php
require_once '../Services/UserService.php';

class UserController
{
    private $userService = new UserService();

    public function register($name, $email, $password)
    {
        $this->userService->register($name, $email, $password);
    }

    public function logIn($email, $password)
    {
        $this->userService->logIn($email, $password);
    }
}