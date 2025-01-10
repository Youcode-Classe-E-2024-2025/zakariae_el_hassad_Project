<?php

class TaskDao
{
    private PDO $connection;

    public function __construct()
    {
        $connectionHolder = new DatabaseConnection();
        $this->connection = $connectionHolder->connect();
    }


    public function create(Task $task)
    {
        $stmt = $this->connection->prepare("INSERT INTO tasks (title , description , category_id ,member_id, start_at , complete_at , created_at ,  status , tag ,project_id) VALUES(:titre , :description , :category_id ,:member_id, :start_at , :complete_at , :created_at ,  :status , :tag , :project_id)");
        return $stmt->execute([
            "titre" => $task->getTitre(),
            "description" => $task->getDescription(),
            "category_id" => $task->getCategory()->getId(),
            "member_id" => $task->getMember(),
            "start_at" => $task->getStarteAt() ? $task->getStarteAt()->format('Y-m-d H:i:s') : null,
            "complete_at" => $task->getCompleteAt() ? $task->getCompleteAt()->format('Y-m-d H:i:s') : null,
            "created_at" => $task->getCreatedAt() ? $task->getCreatedAt()->format('Y-m-d H:i:s') : null,
            "status" => $task->getStatus(),
            "tag" => $task->getTag(),
            "project_id" => $task->getProject()->getId()
        ]);
    }

    public function getAllTaskDeProject(int $projectId): array
    {
        $stmt = $this->connection->prepare("SELECT * FROM tasks WHERE project_id = :id");
        $stmt->execute(["id" => $projectId]);

        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $tasks = [];
        foreach ($rows as $row) {
            $category = new Category();
            $category->setId($row["category_id"]);

            $task = new Task(
                $row["id"],
                $row["title"], 
                $row["description"], 
                $row["status"],
                $row["tag"],
                $category, 
                $row["start_at"] ? new \DateTime($row["start_at"]) : null, 
                $row["complete_at"] ? new \DateTime($row["complete_at"]) : null,
                $row["created_at"] ? new \DateTime($row["created_at"]) : null,
                $row["member_id"], 
                null 
            );

            $tasks[] = $task;
        }

        return $tasks;
    }

   
}
