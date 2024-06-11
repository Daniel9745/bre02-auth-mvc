<?php

class UserManager
{
    private array $users = [];
    private PDO $db;

    public function __construct()
    {
        $host = "localhost";
        $port = "3306";
        $dbname = "danielnoroasy_pooj1";
        $connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

        $user = "root";
        $password = "7VZT61@KLKNBlZ]_";

        $this->db = new PDO(
            $connexionString,
            $user,
            $password
        );
    }
    public function getUser(): array{
        return $this->users;
    }
    public function setUser(array $users): void{
        $this->users = $users;
    }
}
