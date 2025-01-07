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
}