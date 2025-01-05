<?php

class UserService
{
    private UserDao $userDao;
    private ProjectManagerDao $projectManagerDao;
    private ProjectMemberDao $projectMemberDao;

    public function __construct()
    {
        $this->userDao = new UserDao();
        $this->projectManagerDao = new ProjectManagerDao();
        $this->projectMemberDao = new ProjectMemberDao();
    }

    public function register(array $data)
    {
        if ($this->userDao->getByEmail($data["email"])) {
            echo "email and password already taken";
            return;
        }

        if ($data["password"] !== $data["confirm_password"]) {
            echo "passwrods are not equal";
            return;
        }

        $hashedPassword = password_hash($data["password"], PASSWORD_DEFAULT);
        $user = new User(
            name: $data["name"],
            email: $data["email"],
            password: $hashedPassword
        );
        $id = $this->userDao->create($user);
        $user->setId($id);

        if ($data["role"] == "PROJECT_MEMBER") {
            $this->projectMemberDao->create($user);
        } else if ($data["role"] === "PROJECT_MANAGER") {
            $this->projectManagerDao->create($user);
        }
    }

    public function login(array $data)
    {
        $user = $this->userDao->getByEmail($data["email"]);
        if (!$user) {
            return [
                "logged" => false,
                "message" => "user not found"
            ];
        }

        if (!password_verify($data["password"], $user->getPassword())) {
            return [
                "logged" => false,
                "message" => "password is incorrect"
            ];
        }

        // handler user login 
        // store user in session

        return [
            "logged" => true,
            "message" => "user logged in successfully"
        ];
    }
}
