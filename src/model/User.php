<?php

class User
{
    protected int $id;
    protected string $name;
    protected string $email;
    protected string $password;

    public function __construct(int $id, string $name, string $email, string $password)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function add(){
        $sqlStarte = $this->database()->prepare("INSERT INTO users VALUES(? , ? , ? , ?)");
        return $sqlStarte->execute([
            $this->id,
            $this->name,
            $this->email,
            $this->password
        ]);
    }

    public function database(){
        return new PDO('mysql:dbname=manager_project;host=localhost',"root","");
    }
}
