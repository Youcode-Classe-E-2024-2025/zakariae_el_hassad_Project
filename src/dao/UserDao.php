<?php

class UserDao
{
    private PDO $connection;

    public function __construct()
    {
        $connectionHolder = new DatabaseConnection();
        $this->connection = $connectionHolder->connect();
    }

    public function create(User $user): int
    {
        $stmt = $this->connection->prepare("INSERT INTO users (name,email,password) VALUES( :name , :email , :password)");
        $stmt->execute([
            "name" => $user->getName(),
            "email" => $user->getEmail(),
            "password" => $user->getPassword()
        ]);
        return $this->connection->lastInsertId();
    }

    public function getByEmail(string $email)
    {
        $stmt = $this->connection->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->execute(["email" => $email]);
        $userData = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$userData) {
            return null;
        }

        return new User(
            id: $userData["id"],
            name: $userData["name"],
            email: $userData["email"],
            password: $userData["password"]
        );
    }
}
