<?php
const APP_VIEWS = __DIR__ . "/src/view/";
const APP_ASSETS = __DIR__ . "/public/";

require_once "./src/config/DatabaseConnection.php";
# Models
require_once "./src/model/Project.php";
require_once "./src/model/Role.php";
require_once "./src/model/User.php";
require_once "./src/model/Category.php";
require_once "./src/model/Task.php";

# DAOs
require_once "./src/dao/UserDao.php";
require_once "./src/dao/ProjectDao.php";
require_once "./src/dao/CategoryDao.php";
require_once "./src/dao/TaskDao.php";

# Services
require_once "./src/service/UserService.php";
require_once "./src/service/ProjectService.php";
require_once "./src/service/CategoryService.php";
require_once "./src/service/TaskService.php";

# Controllers
require_once "./src/controller/UserController.php";
require_once "./src/controller/HomeController.php";
require_once "./src/controller/ProjectController.php";
require_once "./src/controller/Page404Controller.php";
require_once "./src/controller/CategoryController.php";
require_once "./src/controller/TaskController.php";

$userController = new UserController();
$homeController = new HomeControlller();
$projectController = new ProjectController();
$page404Controller = new Page404Controller();
$categoryController = new CategoryController();
$taskController = new TaskController();
session_start();

if (isset($_GET["action"])) {
    $action = $_GET["action"];

    switch ($action) {
        case "register-form":
            $userController->showRegisterForm();
            break;
        case "register-submit":
            $userController->submitRegister();
            break;
        case "login-form":
            $userController->showLoginForm();
            break;
        case "login-submit":
            $userController->submitLogin();
            break;
        case "logout":
            $userController->logout();
            break;
        case "work-project":
            $userController->getAll();
            break;
        case "home":
            $homeController->showHomePage();
            break;
        case "forms":
            $projectController->getAll();
            break;
        case "projects-list":
            $projectController->getAll();
            break;
        case "save-project":
            $projectController->save();
            break; 
        case "delete_project":
            $projectController->delete();
            break;   
        case "save-category":
            $categoryController->save();
            break;
        case "todo_list":
            $taskController->getTasksByProject();
            break;
        case "save_todo_list":
            $taskController->getAll();
            break;
        case "save_task":
            $taskController->save();
            break;
        case "404":
            $page404Controller->show404();
            break;
        default:
            $page404Controller->show404();
            break;
    }
}
