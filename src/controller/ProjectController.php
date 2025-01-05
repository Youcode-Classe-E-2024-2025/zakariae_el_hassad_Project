<?php

class ProjectController
{
    private ProjectService $projectService;

    public function __construct()
    {
        $this->projectService = new ProjectService();
    }

    public function save() {
        $this->projectService->save($_POST);
        $projects = $this->projectService->getAll();
        require_once APP_VIEWS . "forms.php";
    }

    public function getAll() {
        $projects = $this->projectService->getAll();
        require_once APP_VIEWS . "forms.php";
    }
    
}
