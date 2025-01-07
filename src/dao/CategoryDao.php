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
        
       
        $stmt = $this->connection->prepare("INSERT INTO categories (name , description , project_manager_id) VALUES ( :name , :description , :project_manager_id)");
        return $stmt->execute([
            "name" => $category->getName(),
            "description" => $category->getDescription(),
            "project_manager_id" => $category->getProjectManager()->getId()
        ]);
    }

    public function getAllCategory(int $id)
    {
        $stmt = $this->connection->prepare("SELECT * FROM categories WHERE project_manager_id = :id");

        $stmt->execute(["id" => $id]);
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $Categorys = [];
        foreach ($rows as $row) {
            $Category = new category($row["id"], $row["name"], $row["description"],null);
            array_push($Categorys, $Category);
        }
        return $Categorys;
    }

}