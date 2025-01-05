<?php

class ProjectController
{
    private ProjectService $projectService;

    public function __construct()
    {
        $this->projectService = new ProjectService();
    }

    private function checkLogin()
    {
        return isset($_SESSION['logged']);
    }

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

        $projects = $this->projectService->getAll();
        require_once APP_VIEWS . "forms.php";
    }
}
