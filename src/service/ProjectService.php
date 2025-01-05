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
            true :
            false;

        $projectManager = new ProjectManager();
        $projectManager->setId(1);

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
        return $this->projectDao->getAll();
    }
}
