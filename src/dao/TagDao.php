<?php 

class TagDao{
    private PDO $connection;

    public function __construct()
    {
        $connectionHolder = new DatabaseConnection();
        $this->connection = $connectionHolder->connect();
    }

    public function create(Tag $Tag)
    {
        $stmt = $this->connection->prepare("INSERT INTO tags (name ) VALUES( :name )");
        return $stmt->execute([
            "name" => $Tag->getName()
        ]);
    }
}