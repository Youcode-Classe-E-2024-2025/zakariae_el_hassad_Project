<?php
require_once "User.php";
class ProjectManager extends User {
    private array $project;

    public function __construct(int $id, string $name, string $email, string $password , array $project)
    {

        parent::__construct( $id,  $name,  $email,  $password);
        $this->project = $project;
    }

    public function getProject() : array {
        return $this->project;
    }
    public function setProject(array $project) : void{
        $this->project = $project;
    }
}