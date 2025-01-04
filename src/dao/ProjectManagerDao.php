<?php

class ProjectManagerDao
{
    private PDO $connection;

    public function __construct()
    {
        $connectionHolder = new DatabaseConnection();
        $this->connection = $connectionHolder->connect();
    }

    public function create(ProjectManager $projectManager)
    {
        $stmt = $this->connection->prepare("INSERT INTO project_managers (user_id) VALUES( :user_id)");
        return $stmt->execute([
            "user_id" => $projectManager->getId()
        ]);
    }
}
