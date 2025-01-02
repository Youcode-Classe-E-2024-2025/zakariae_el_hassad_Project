<?php

require_once "User.php";
class Member extends User {
    private array $task;

    public function __construct(int $id, string $name, string $email, string $password , array $task){
        parent::__construct( $id,  $name,  $email,  $password);
        $this->task = $task;
    }

    public function getTasks() : array{
        return $this->task;
    }
    public function setTasks(array $task) : void {
        $this->task = $task;
    }
}