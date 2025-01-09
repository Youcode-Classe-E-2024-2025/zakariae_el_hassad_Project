<?php

class CategoryService
{

    private CategoryDao $categoryDao;

    public function __construct()
    {
        $this->categoryDao = new CategoryDao();
    }

    public function save(array $data)
    {

        $projectManager = new User();
        $user = $_SESSION["user"];  
        $projectManager->setId($user->getId());
     
        $category = new Category(
            name: $data["name"],
            description: $data["description"],
            projectManager: $projectManager
        );
        $this->categoryDao->create($category);
    }

    public function getAllCategory()
    {
        $user = $_SESSION["user"];
        return $this->categoryDao->getAllCategory($user->getId());
    }

    public function getCategoryById(int $id): ?Category
    {
        // Hna ghadi nverifyo wach category kayna wla la.
        $category = $this->categoryDao->findById($id);

        if ($category === null) {
            throw new Exception("Category with ID $id not found.");
        }

        return $category;
    }
}