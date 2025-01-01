<?php

class Status {
    private int $id;
    private string $name;
    private array $task;

    public function __construct(int $id , string $name , array $task){
        $this->id = $id;
        $this->name = $name;
        $this->task = $task;
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

    public function getTasks() : array{
        return $this->task;
    }
    public function setTasks(array $task) : void {
        $this->task = $task;
    }


}