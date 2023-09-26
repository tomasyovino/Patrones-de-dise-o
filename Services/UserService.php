<?php
include_once "../Repository/UserRepository.php";

class UserService
{
    private $userRepository;

    public function __construct($userRepository)
    {
        $this->userRepository = UserRepository::getInstance();
    }

    public function register($name, $email, $phoneNumber, $password, $subscribed)
    {
        $user = $this->userRepository->create($name, $email, $phoneNumber, $password, $subscribed);
    }

    public function logIn($email, $password)
    {
        $userExist = $this->userRepository->findByParam($email);
        if (!$userExist) {
            return "El email ingresado no es válido";
        }

        if ($password !== $userExist->$password) {
            return "La contraseña ingresada no es válida";
        }

        return $userExist; // Generar lógica de ingreso de sesión y retornar
    }

    public function addObserver($id)
    {
        $user = $this->userRepository->find($id);
        $user->subscribed = true;
        $updatedUser = $this->userRepository->update($id, $user);
        return $updatedUser;
    }

    public function findObservers() {
        $subscribed = true;
        $users = $this->userRepository->findByParam($subscribed);
        return $users;
    }
}