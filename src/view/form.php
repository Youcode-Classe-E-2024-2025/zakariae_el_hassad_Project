<?php
require '../model/Tag.php';
require_once '../model/Project.php';
require_once '../model/ProjectManager.php';
require_once "../dao/ProjectDao.php";
require_once "../dao/ProjectmanagerDao.php";


$projectManager = new ProjectManager();
$projectManager->setId(1);

$projectManagerDao = new ProjectManagerDao();
$projectManagerDao->create($projectManager);
$project = new Project(0, "project name", "project desc", true, $projectManager);

$projectDao = new ProjectDao();
var_dump($projectDao->create($project));


// $zakaria = new Tag(name: "aymane");
// print_r($zakaria->add());   
// echo "</pre>";

// require '../model/User.php';

// $za = new User(name : " zakariae" , email : "zakaria@email.com" , password : "zaka1234");
// print_r($za->add());
// echo "</pre>";

?>




