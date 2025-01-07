<?php

class Task {

    private int $id;
    private string $titre;
    private string $description;
    private bool $isStatus;
    private Category $iscategory;
    private dateTime $starteAt;
    private dateTime $completeAt;
    private dateTime $createdAt;
    private array $member_id;
    public ?Project $projectid;

    public function __construct(int $id = 0 , string $titre , string $description ,bool $isStatus, category $iscategory , dateTime $starteAt , dateTime $completeAt , dateTime $createdAt , array $member_id , ?Project $projectid){
        $this->id = $id;
        $this->titre =$titre;
        $this->description = $description;
        $this->isStatus = $isStatus;
        $this->iscategory = $iscategory;
        $this->starteAt = $starteAt;
        $this->completeAt = $completeAt;
        $this->createdAt = $createdAt;
        $this->member_id = $member_id;
        $this->projectid = $projectid;
    }

    public function getId() : int {
        return $this->id ;
    }
    public function setId(int $id) :void {
         $this->id = $id;
    }

    public function getTitre() :string{
        return $this->titre;
    }
    public function setTitre(string $titre) : void{
        $this->titre = $titre;
    }

    public function getDescription() : string {
        return $this->description;
    }
    public function setDescription(string $description) : void {
        $this->description = $description;
    }

    public function getStatus() : bool {
        return $this->isStatus;
    }
    public function setStatus(bool $isStatus) : void{
        $this->isStatus = $isStatus;
    }

    public function getCategory() : Category{
        return $this->iscategory;
    }
    public function setCategory(Category $iscategory) : void {
        $this->iscategory = $iscategory;
    }

    public function getStarteAt() : dateTime {
        return $this->starteAt;
    }
    public function setStarteAt(dateTime $starteAt) : void {
        $this->starteAt = $starteAt; 
    }

    public function getCompleteAt() : dateTime {
        return $this->completeAt;
    }
    public function setCompleteAt(dateTime $completeAt) : void {
        $this->completeAt = $completeAt; 
    }

    public function getCreatedAt() : dateTime {
        return $this->createdAt;
    }
    public function setCreatedAt(dateTime $createdAt) : void {
        $this->createdAt = $createdAt; 
    }

    public function getMember() : array{
        return $this->member_id;
    }
    public function setMember(array $member_id) : void {
        $this->member_id = $member_id;
    }

    public function getProject() : Project {
        return $this->projectid;
    }
    public function setProject(Project $projectid) : void {
        $this->projectid = $projectid;
    }

}

