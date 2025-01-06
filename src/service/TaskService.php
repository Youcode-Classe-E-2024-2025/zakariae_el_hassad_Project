<?php

class TaskService
{
   private TaskDao $taskDao; 

   public function __construct()
   {
    $this->taskDao = new TaskDao();
   }
}