<?php

class HomeControlller
{

    private ProjectService $projectService;

    public function __construct()
    {
        $this->projectService = new ProjectService();
    }
    public function showHomePage()
    {
        $projects = $this->projectService->getPublicProjects();
        require_once APP_VIEWS . "home.php";
    }

    public function showformsPage()
    {
        $projects = $this->projectService->getAll();
        require_once APP_VIEWS . "forms.php";
    }

    public function save()
    {
        $this->projectService->save($_POST);
        $projects = $this->projectService->getAll();
        require_once APP_VIEWS . "forms.php";
    }

    public function getAll()
    {
        require_once APP_VIEWS . "forms.php";
    }
}
