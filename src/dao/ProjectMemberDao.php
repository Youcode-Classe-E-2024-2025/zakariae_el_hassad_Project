<?php

class ProjectMemberDao
{
    private PDO $connection;

    public function __construct()
    {
        $connectionHolder = new DatabaseConnection();
        $this->connection = $connectionHolder->connect();
    }

    public function create(projectMember $projectMember)
    {
        $stmt = $this->connection->prepare("INSERT INTO members (user_id) VALUES( :user_id)");
        return $stmt->execute([
            "user_id" => $projectMember->getId()
        ]);
    }
}
