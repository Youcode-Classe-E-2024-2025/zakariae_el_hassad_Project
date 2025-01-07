<?php

class TaskDao {
    private PDO $connection;

    public function __construct()
    {
        $connectionHolder = new DatabaseConnection();
        $this->connection = $connectionHolder->connect();
    }


    public function create(Task $task){
        $stmt = $this->connection->prepare("INSERT INTO tasks (titre , description , category_id ,member_id, start_at , complete_at , created_at ,  status ,project_id) VALUES(:titre , :description , :category_id ,:member_id, :start_at , :complete_at , :created_at ,  :status , :project_id)");
        return $stmt->execute([
                "titre" => $task->getTitre(),
                "description" => $task->getDescription(),
                "category_id" => $task->getCategory(),
                "member_id" => $task->getMember(),
                "start_at" => $task->getStarteAt(),
                "complete_at" => $task->getCompleteAt(),
                "created_at" => $task->getCreatedAt(),
                "status" => $task->getStatus(),
                "project_id" => $task->getProject()->getId()
        ]);
    }

    public function getAllTaskDeProject(int $id)
    {
        $stmt = $this->connection->prepare("SELECT * FROM tasks WHERE  project_id= :id");


        $stmt->execute(["id" => $id]);
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $tasks = [];
        foreach ($rows as $row) {
            $task = new task($row["id"], $row["titre"], $row["description"], $row["category_id"] , $row["member_id"]  , $row["start_at"] , $row["complete_at"] , $row["created_at"] , $row["status"] , null);
            array_push($tasks, $task);
        }

        return $tasks;
    }
}