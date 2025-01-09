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

    public function findById(int $id): ?Category
    {
        $stmt = $this->connection->prepare("
            SELECT c.id AS category_id, c.name AS category_name, c.description AS category_description, 
                   u.id AS user_id, u.name AS user_name, u.email AS user_email
            FROM categories c
            LEFT JOIN users u ON c.project_manager_id = u.id
            WHERE c.id = :id
        ");
        $stmt->execute(['id' => $id]);
        $categoryData = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if ($categoryData) {
            // Create User object for projectManager
            $projectManager = null;
            if ($categoryData['user_id']) {
                $projectManager = new User(
                    id: (int)$categoryData['user_id'],
                    name: $categoryData['user_name'],
                    email: $categoryData['user_email']
                );
            }
    
            // Return Category object
            return new Category(
                id: (int)$categoryData['category_id'],
                name: $categoryData['category_name'],
                description: $categoryData['category_description'],
                projectManager: $projectManager
            );
        }
    
        return null;
    }
    

}