<?php

class Task {

    public const STATUS_TODO = 'pending';
    public const STATUS_DIONG = 'in_progress';
    public const STATUS_DONE = 'completed';

    private int $id;
    private string $titre;
    private string $description;
    private string $status;
    private dateTime $starteAt;
    private dateTime $completeAt;
    private dateTime $createdAt;

    public function __construct(int $id , string $titre , string $description ,string $status , dateTime $starteAt , dateTime $completeAt , dateTime $createdAt){
        $this->id = $id;
        $this->titre =$titre;
        $this->description = $description;
        $this->status = $status;
        $this->starteAt = $starteAt;
        $this->completeAt = $completeAt;
        $this->createdAt = $createdAt;
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

    public function getStatus() : string {
        return $this->status;
    }
    public function setStatus(string $status) : void{
        $this->status = $status;
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

}

