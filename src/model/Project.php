<?php

class Project {
    private int $id;
    private string $name;
    private string $description;
    private bool $isPublic;
    private array $task;
    public ?User $projectManager;

    public function __construct(int $id = 0, string $name, string $description, bool $isPublic, ?User $projectManager) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->isPublic = $isPublic;
        $this->projectManager = $projectManager;
    }   

    public function getId(): int {
        return $this->id;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function setDescription(string $description): void {
        $this->description = $description;
    }

    public function isPublic(): bool {
        return $this->isPublic;
    }

    public function setIsPublic(bool $isPublic): void {
        $this->isPublic = $isPublic;
    }

    public function getTasks() : array{
        return $this->task;
    }
    public function setTasks(array $task) : void {
        $this->task = $task;
    }

    public function getProjectManager() : User{
        return $this->projectManager;
    }
    public function setProjectManager(User $projectManager):void{
        $this->projectManager = $projectManager;
    }
}