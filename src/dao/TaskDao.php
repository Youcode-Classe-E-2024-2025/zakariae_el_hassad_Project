<?php

class TaskDao {
    private PDO $connection;

    public function __construct()
    {
        $connectionHolder = new DatabaseConnection();
        $this->connection = $connectionHolder->connect();
    }

    public function create(Task $task){
        $stmt = $this->connection->prepare("INSERT INTO tasks (titre , description , status_id , category_id, project_id , member_id , status , complete_at , created_at) VALUES(:titre , :description , :status_id , :category_id, :project_id , :member_id , :start_at , :complete_at , :created_at)");
        return $stmt->execute([
            "titre" => $task->getTitre(),
            "description" => $task->getDescription(),
            "status_id" => $task->getStatus(),
            "category_id" => $task->getCategory(),
            "member_id" => $task->getMember(),
            "start_at" => $task->getStarteAt(),
            "complete_at" => $task->getCompleteAt(),
            "created_at" => $task->getCreatedAt()
        ]);
    }
}