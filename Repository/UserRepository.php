<?php
include_once "../Model/User.php";

class UserRepository
{
    private static $instance = null;

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function create($name, $email, $password)
    {
        return new User($name, $email, $password);
    }

    public function find($email)
    {
        return; // Consulta a la base de datos
    }
}