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
        $response = $this->userService->login($_POST);
        if (!$response["logged"]) {
            echo $response["message"];
            header("location: http://localhost/zakariae_el_hassad_project/?action=login-form&message={$response['message']}");
            return;
        }

        header("location: http://localhost/zakariae_el_hassad_project/?action=home");
    }
}
