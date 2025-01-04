<?php

require_once "../config/DatabaseConnection.php";
require_once "../model/Project.php";

class ProjectDao
{
    private PDO $connection;

    public function __construct()
    {
        $connectionHolder = new DatabaseConnection();
        $this->connection = $connectionHolder->connect();
    }

    public function create(Project $project): bool
    {
        $stmt = $this->connection->prepare("INSERT INTO projects (name, description, is_public, project_manager_id) VALUES (:name, :description, :is_public, :project_manager_id)");
        return $stmt->execute([
            "name" => $project->getName(),
            "description" => $project->getDescription(),
            "is_public" => $project->isPublic(),
            "project_manager_id" => $project->getProjectManager()->getId()
        ]);
    }

    public function update(int $id, Project $project) {}

    public function delete(int $id) {}

    public function getAll() {}

    public function getById(int $id) {}
}
