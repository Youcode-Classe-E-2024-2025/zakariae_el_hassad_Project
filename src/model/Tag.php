<?php

class Tag {
    private int $id;
    private string $name;

    public function __construct(int $id = 0, string $name = ""){
        $this->id = $id;
        $this->name = $name;
    }

    public function getId() :int {
        return $this->id;
    }
    public function setId(int $id) :void{
        $this->id=$id;
    }

    public function getName() :string{
        return $this->name;
    }

    public function setName(string $name) : void{
        $this->name = $name;
    }


    public function add(): bool{
        $sqlStarte = $this->database()->prepare("INSERT INTO tags (name) VALUES(?)");
        return $sqlStarte->execute([
            $this->name
        ]);
    }

    public function database(){
        return new PDO('mysql:dbname=manager_project;host=localhost',"root","");
    }
}

