<?php
include_once "../Model/Observer.php";

class ObserverRepository
{
    private static $instance = null;

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function create($id)
    {
        return new Observer($id);
    }

    public function findAll()
    {
        return []; // Database query
    }
}