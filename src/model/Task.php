<?php

class Task {

    private int $id;
    private string $titre;
    private string $description;
    private Status $status;
    private Category $category;
    private dateTime $starteAt;
    private dateTime $completeAt;
    private dateTime $createdAt;
    private array $project;
    private Member $member;

    public function __construct(int $id , string $titre , string $description ,Status $status, category $Category , dateTime $starteAt , dateTime $completeAt , dateTime $createdAt , array $project , Member $member){
        $this->id = $id;
        $this->titre =$titre;
        $this->description = $description;
        $this->status = $status;
        $this->category = $Category;
        $this->starteAt = $starteAt;
        $this->completeAt = $completeAt;
        $this->createdAt = $createdAt;
        $this->project = $project;
        $this->member = $member;
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

    public function getStatus() : Status {
        return $this->status;
    }
    public function setStatus(Status $status) : void{
        $this->status = $status;
    }

    public function getCategory() : Category{
        return $this->category;
    }
    public function setCategory(Category $category) : void {
        $this->category = $category;
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

    public function getProject() : array {
        return $this->project;
    }
    public function setProject(array $project) : void{
        $this->project = $project;
    }

    public function getMember() : Member {
        return $this->member;
    }
    public function setMember(Member $member) : void {
        $this->member = $member;
    }

}

