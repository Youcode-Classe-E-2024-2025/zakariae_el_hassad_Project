<?php
const APP_VIEWS = __DIR__ . "/src/view/";
const APP_ASSETS = __DIR__ . "/public/";

require_once "./src/config/DatabaseConnection.php";
# Models
require_once "./src/model/ProjectManager.php";
require_once "./src/model/ProjectMember.php";
require_once "./src/model/Project.php";

# DAO
require_once "./src/dao/UserDao.php";
require_once "./src/dao/ProjectManagerDao.php";
require_once "./src/dao/ProjectMemberDao.php";
require_once "./src/dao/ProjectDao.php";

# Service
require_once "./src/service/UserService.php";
require_once "./src/service/ProjectService.php";

# Controllers
require_once "./src/controller/UserController.php";
require_once "./src/controller/HomeController.php";
require_once "./src/controller/ProjectController.php";

$userController = new UserController();
$homeController = new HomeControlller();
$projectController = new ProjectController();

if(isset($_GET["action"])) {
    $action = $_GET["action"];

    switch($action) {
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
        case "home":
            $homeController->showHomePage();
            break;
        case "forms":
            // $homeController->showFormsPage();
            $projectController->getAll();

            break;
        case "projects-list":
            $projectController->getAll();
            break;
        case "save-project":
            $projectController->save();
            break;
        default:
            echo "action not found";
            break;
    }
}