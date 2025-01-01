<?php

class Category {
    private int $id;
    private string $name;
    private string $description;
    private array $task;

    public function __contruct(int $id , string $name , string $description , array $task){
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->task = $task ;
    }

    public function getId() : int{
        return $this->id;
    }
    public function setId(int $id) : void{
        $this->id = $id;
    }

    public function getName() : string{
        return $this->name;
    }
    public function setName(string $name) :void{
        $this->name = $name;
    }

    public function getDescription() :string{
        return $this->description;
    }
    public function setDescription(string $description) :void{
        $this->description = $description;
    }

    public function getTasks() : array{
        return $this->task;
    }
    public function setTasks(array $task) : void {
        $this->task = $task;
    }
}