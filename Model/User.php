<?php
// Preguntarle a Marian sobre private/protected
class User
{
    private $name;
    private $email;
    private $phoneNumber;
    private $password;
    private $subscribed;

    public function __construct($name, $email, $phoneNumber, $password, $subscribed)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phoneNumber = $phoneNumber;
        $this->password = $password;
        $this->subscribed = $subscribed;
    }
}