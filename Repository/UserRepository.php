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

    public function create($name, $email, $phoneNumber, $password, $subscribed)
    {
        return new User($name, $email, $phoneNumber, $password, $subscribed);
    }

    public function find($id)
    {
        return; // Consulta a la base de datos
    }

    public function findByParam($param)
    {
        return; // Consulta a la base de datos
    }

    public function update($id, $obj) 
    {
        return; // Consulta a la base de datos
    }
}