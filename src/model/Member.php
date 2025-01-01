<?php

class Member extends User {
    private array $task;

    public function __construct(array $task){
        $this->task = $task;
    }

    public function getTasks() : array{
        return $this->task;
    }
    public function setTasks(array $task) : void {
        $this->task = $task;
    }
}