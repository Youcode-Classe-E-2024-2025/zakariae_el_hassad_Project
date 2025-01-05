<?php

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

    public function getAll()
    {
        $stmt = $this->connection->query("SELECT * FROM projects");

        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $projects = [];
        foreach ($rows as $row) {
            $project = new Project($row["id"], $row["name"], $row["description"], $row["is_public"], null);
            array_push($projects, $project);
        }

        return $projects;
    }
}
