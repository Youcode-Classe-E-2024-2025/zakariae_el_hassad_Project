<?php

class TaskService
{
    private TaskDao $taskDao;

    public function __construct()
    {
        $this->taskDao = new TaskDao();
    }

    public function save(array $data)
    {
        $isStatus = ($data["todo"] === "todo") ? false : 
              (($data["doing"] === "doing") ? true : 
              (($data["done"] === "done") ? true : false)); 

        $projectid = new Project();
        $project = $_SESSION["project"];  
        $projectid->setId($project->getId());

        $Task = new Task(
            titre: $data["titre"],
            description: $data["description"],
            isStatus : $isStatus,
            iscategory: $data["isCategory"],
            member_id: $data["member_id"],
            starteAt: $data["start_at"],
            completeAt :$data["complete_at"],
            createdAt :$data["created_at"],
            projectid: $projectid
        );

        $this->taskDao->create($Task);
    }

    public function getAll()
    {
        $project = $_SESSION["project"];
        return $this->taskDao->getAllTaskDeProject($project->getId());
    }

}
