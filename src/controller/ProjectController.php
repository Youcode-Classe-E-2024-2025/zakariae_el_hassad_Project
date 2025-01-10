<?php

class ProjectController
{
    private ProjectService $projectService;
    private CategoryService $categoryService;

    public function __construct()
    {
        $this->projectService = new ProjectService();
        $this->categoryService = new CategoryService();
    }

    private function checkLogin()
    {
        return isset($_SESSION['logged']);
    }

    // private function checkRole()
    // {
    //     return isset($_SESSION['user']->role_id) && $_SESSION['user']->role_id = 1 ;
    // }
    // private function checkRoleManager()
    // {
    //     return isset($_SESSION['user']->role_id) && $_SESSION['user']->role_id = 2 ;
    // }

    public function save()
    {
        $this->checkLogin();
        $this->projectService->save($_POST);
        header("Location: http://localhost/zakariae_el_hassad_project/?action=projects-list");
        exit();
    }

    public function getAll()
    {
        if (!$this->checkLogin()) {
            header("Location: http://localhost/zakariae_el_hassad_project/?action=404");
            exit();
        }
        // if(!$this->checkRole()){
        //     header("Location: http://localhost/zakariae_el_hassad_project/?action=home");
        //     exit();
        // }
        // if(!$this->checkRoleManager()){
        $categorys = $this->categoryService->categoryService();
        $projects = $this->projectService->getAll();
        require_once APP_VIEWS . "forms.php";
        // }

    }
    public function delete() {
        if (isset($_GET['project_id'])) {
            $projectId = $_GET['project_id']; 
           
            $this->projectService->delete($projectId); 
        }
        if (!$this->checkLogin()) {
        
        header("Location: ?action=todo_list");
        exit();
    }
    $categorys = $this->categoryService->categoryService();
    $projects = $this->projectService->getAll();
        require_once APP_VIEWS . "forms.php";
    }
    
}
