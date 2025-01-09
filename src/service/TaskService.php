<?php

use function PHPSTORM_META\type;

class TaskService
{
    private TaskDao $taskDao;
    private CategoryService $categoryService;

    public function __construct()
    {
        $this->taskDao = new TaskDao();
        $this->categoryService = new CategoryService(); 
    }

    public function save(array $data)
    {

        $category = $this->categoryService->getCategoryById((int)$data["isCategory"]);

        $isStatus = ($data["status"] === "todo") ? false : 
              (($data["status"] === "doing") ? true : 
              (($data["status"] === "done") ? true : false)); 

            //   if (!isset($_SESSION["project"])) {
            //     header("Location: http://localhost/zakariae_el_hassad_project/?action=404");
            //     exit();
            // }
            

        
        $project = new Project();
        $project->setId ((int) $_GET["project_id"]);
        
        
        $task = new Task(
            titre: $data["titre"],
            description : $data["description"],
            isStatus : $isStatus,
            iscategory: $category,
            member_id: $data["member_id"],
            starteAt: new DateTime($data["start_at"]),  
            completeAt: new DateTime($data["complete_at"]),  
            createdAt: new DateTime($data["created_at"]),
            projectid: $project
        );        

        
        $this->taskDao->create($task);
    }

    public function getAll()
    {
        $project = new Project();
        $project->setId ((int) $_GET["project_id"]);
        var_dump($project);
        die();
        return $this->taskDao->getAllTaskDeProject($project);
       
    }

    public function getAllByProjectId(int $projectId): array
{
    return $this->taskDao->getAllTaskDeProject($projectId);
}


}
