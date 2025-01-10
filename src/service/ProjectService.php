<?php

class ProjectService
{

    private ProjectDao $projectDao;

    public function __construct()
    {
        $this->projectDao = new ProjectDao();
    }

    public function save(array $data)
    {
        $isPublic = $data["visibility"] ===  "private" ?
            false :
            true;


        $projectManager = new User();
        $user = $_SESSION["user"];
        $projectManager->setId($user->getId());

        $Project = new Project(
            name: $data["name"],
            description: $data["description"],
            isPublic: $isPublic,
            projectManager: $projectManager
        );

        $this->projectDao->create($Project);
    }

    public function getAll()
    {
        $user = $_SESSION["user"];
        return $this->projectDao->getAll($user->getId());
    }

    public function getPublicProjects()
    {
        return $this->projectDao->getPublicProjects();
    }

    public function delete($id) {
        return $this->projectDao->getDelete($id);
    }
    
}
