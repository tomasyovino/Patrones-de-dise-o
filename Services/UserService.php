<?php
include_once "../Repository/UserRepository.php";

class UserService
{
    private $userRepository;

    public function __construct($userRepository)
    {
        $this->userRepository = UserRepository::getInstance();
    }

    public function register($name, $email, $password)
    {
        $user = $this->userRepository->create($name, $email, $password);
    }

    public function logIn($email, $password)
    {
        $userExist = $this->userRepository->find($email);
        if (!$userExist) {
            return "El email ingresado no es válido";
        }

        if ($password !== $userExist->$password) {
            return "La contraseña ingresada no es válida";
        }

        return $userExist; // Generar lógica de ingreso de sesión y retornar
    }
}