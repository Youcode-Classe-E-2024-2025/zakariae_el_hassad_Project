<?php

require_once "User.php";
class ProjectMember extends User {
    private array $task;

    public function __construct(int $id = 0, string $name= "", string $email= "", string $password= ""){
        parent::__construct( $id,  $name,  $email,  $password);
    }

    public function getTasks() : array{
        return $this->task;
    }
    public function setTasks(array $task) : void {
        $this->task = $task;
    }
}