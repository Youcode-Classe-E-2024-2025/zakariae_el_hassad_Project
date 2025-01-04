<?php

class UserDao
{
    private PDO $connection;

    public function __construct()
    {
        $connectionHolder = new DatabaseConnection();
        $this->connection = $connectionHolder->connect();
    }
    public function create(User $user)
    {
        $stmt = $this->connection->prepare("INSERT INTO users (name,email,password) VALUES( :name , :email , :password)");
        return $stmt->execute([
            "name" => $user->getName(),
            "email" => $user->getEmail(),
            "password" => $user->getPassword()
        ]);
    }
}
