<?php 

class TaskStatusDao{
    private PDO $connection;

    public function __construct()
    {
        $connectionHolder = new DatabaseConnection();
        $this->connection = $connectionHolder->connect();
    }

    public function create(Status $Status)
    {
        $stmt = $this->connection->prepare("INSERT INTO statuses (name ) VALUES( :name )");
        return $stmt->execute([
            "name" => $Status->getName()
        ]);
    }
}