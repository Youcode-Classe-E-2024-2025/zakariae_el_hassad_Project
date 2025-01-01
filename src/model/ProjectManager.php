<?php

class ProjectManager extends User {
    private array $project;

    public function __construct(array $project){
        $this->project = $project;
    }

    public function getProject() : array {
        return $this->project;
    }
    public function setProject(array $project) : void{
        $this->project = $project;
    }
}