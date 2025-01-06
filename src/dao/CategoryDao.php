<?php

class CategoryDao {
    private PDO $connection;

    public function __construct()
    {
        $connectionHolder = new DatabaseConnection();
        $this->connection = $connectionHolder->connect();
    }

    public function create(Category $category)
    {
        $stmt = $this->connection->prepare("INSERT INTO categories (name , description) VALUES( :name , :description)");
        return $stmt->execute([
            "name" => $category->getName(),
            "description" => $category->getDescription()
        ]);
    }

    public function getAllCategory()
    {
        $stmt = $this->connection->prepare("SELECT * FROM categories ");

        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $Categorys = [];
        foreach ($rows as $row) {
            $Category = new category($row["id"], $row["name"], $row["description"]);
            array_push($Categorys, $Category);
        }

        return $Categorys;
    }

}