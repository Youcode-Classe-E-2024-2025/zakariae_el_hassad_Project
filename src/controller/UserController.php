    <?php

    class UserController
    {
        private UserService $userService;

        public function __construct()
        {
            $this->userService = new UserService();
        }
        public function showRegisterForm()
        {
            require_once APP_VIEWS . "create-account.php";
        }

        public function submitRegister()
        {
            $this->userService->register($_POST);
            require_once APP_VIEWS . "login.php";
        }

        public function showLoginForm()
        {
            require_once APP_VIEWS . "login.php";
        }

        public function submitLogin()
{
    session_start();

    $response = $this->userService->login($_POST);

    if (!$response["logged"]) {
        header("Location: http://localhost/zakariae_el_hassad_project/?action=login-form&message={$response['message']}");
        exit();
    }

    session_reset();
    $_SESSION['user'] = $response['user'];
    $_SESSION['logged'] = true;

    if ($response['user']->getRole()->getId() == 2) { 
        header("Location: http://localhost/zakariae_el_hassad_project/?action=forms");
    } else {
        header("Location: http://localhost/zakariae_el_hassad_project/?action=home");
    }
    exit();
}


        public function getAll()
        {
            $users = $this->userService->getAllByRoleId(1);
            require_once APP_VIEWS . "workProject.php";
        }

        public function logout(){
            session_start();
            session_unset();
            session_destroy();
            header("Location: ?action=login-form");
            exit;
        }
    }
