<?php

class TaskController
{
    private TaskService $taskService;
    private CategoryService $categoryService;
    private UserService $userService;

    public function __construct()
    {
        $this->taskService = new TaskService();
        $this->categoryService = new CategoryService();
        $this->userService = new UserService();
    }

    public function save()
    {
        $request = [
            "titre" => $_POST["titre"],
            "description" => $_POST["description"],
            "start_at" => $_POST["start_at"],
            "complete_at" => $_POST["complete_at"],
            "created_at" => $_POST["created_at"],
            "isCategory" => $_POST["isCategory"],
            "member_id" => $_POST["member_id"],
            "status" => $_POST["todo"],
            "tag" => $_POST["MEDIUM-PRIORITY"],
            "projectid" => $_GET["project_id"]
        ];
        $this->taskService->save($request);
        header("Location: http://localhost/zakariae_el_hassad_project/?action=todo_list&project_id={$_GET['project_id']}");
        exit();
    }

    public function getAll()
    {
        $categorys = $this->categoryService->categoryService();
        $task = $this->taskService->getAll();
        require_once APP_VIEWS . "taskflow.php";
    }

    public function getTasksByProject()
    {
        if (!isset($_GET['project_id']) || empty($_GET['project_id'])) {
            header("Location: http://localhost/zakariae_el_hassad_project/?action=404");
            exit();
        }

        $projectId = (int) $_GET['project_id'];
        $users = $this->userService->getAllByRoleId(1);
        $categorys = $this->categoryService->categoryService($projectId);
        $tasks = $this->taskService->getAllByProjectId($projectId);
        require_once APP_VIEWS . "taskflow.php";
    }

    public function delete() {
        if (isset($_GET['task_id'])) {
            $taskId = $_GET['task_id']; 
           
            $this->taskService->delete($taskId); 
        }

        $projectId = (int) $_GET['project_id'];
        $users = $this->userService->getAllByRoleId(1);
        $categorys = $this->categoryService->categoryService($projectId);
        $tasks = $this->taskService->getAllByProjectId($projectId);
        require_once APP_VIEWS . "taskflow.php";
    }
}
