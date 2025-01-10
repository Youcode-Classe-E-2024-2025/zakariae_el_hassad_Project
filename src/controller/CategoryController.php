<?php

class CategoryController
{
    private CategoryService $categoryService;

    public function __construct()
    {
        $this->categoryService = new CategoryService();
    }

    private function checkLogin()
    {
        return isset($_SESSION['logged']);
    }

    public function save()
    {
        $this->checkLogin();
        $this->categoryService->save($_POST);
        header("Location: http://localhost/zakariae_el_hassad_project/?action=forms");
        exit();
    }
    
}   
