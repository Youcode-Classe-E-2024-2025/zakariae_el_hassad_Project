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
    // Fetch the category
    $category = $this->categoryService->getCategoryById((int)$data["isCategory"]);

    // Validate status
    $allowedStatuses = ["TODO", "DOING", "DONE"];
    $status = strtoupper($data["status"] ?? "TODO");
    if (!in_array($status, $allowedStatuses)) {
        throw new InvalidArgumentException("Invalid status value.");
    }

    // Validate tag
    $allowedTags = ["URGENT", "MEDIUM-PRIORITY", "LOW-PRIORITY"];
    $tag = strtoupper($data["tag"] ?? "MEDIUM-PRIORITY");
    if (!in_array($tag, $allowedTags)) {
        throw new InvalidArgumentException("Invalid tag value.");
    }

    // Validate project
    if (!isset($_GET["project_id"])) {
        throw new RuntimeException("Project ID is required.");
    }

    $project = new Project();
    $project->setId((int)$_GET["project_id"]);

    $task = new Task(
        id: $data["id"] ?? 0, 
        titre: $data["titre"],
        description: $data["description"],
        status: $status,
        tag: $tag,
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

public function delete($id) {
    return $this->taskDao->getDelete($id);
}

}
