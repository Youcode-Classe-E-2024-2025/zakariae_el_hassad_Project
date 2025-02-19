    <?php

    class Task
    {

        private int $id;
        private string $titre;
        private string $description;
        private string $status;
        private string $tag;
        private Category $iscategory;
        private DateTime $starteAt;
        private DateTime $completeAt;
        private DateTime $createdAt;
        private string $member_id;
        public ?Project $projectid;

        public function __construct(
            int $id = 0,
            string $titre = "",
            string $description = "",
            string $status = "TODO", 
            string $tag = "MEDIUM-PRIORITY", 
            Category $iscategory,
            DateTime|string $starteAt,
            DateTime|string $completeAt,
            DateTime|string $createdAt,
            array|string $member_id,
            ?Project $projectid = null
        ) {
            $this->id = $id;
            $this->titre = $titre;
            $this->description = $description;
            $this->status = strtoupper($status);
            $this->tag = strtoupper($tag);
            $this->iscategory = $iscategory;
            $this->starteAt = $starteAt instanceof DateTime ? $starteAt : new DateTime($starteAt);
            $this->completeAt = $completeAt instanceof DateTime ? $completeAt : new DateTime($completeAt);
            $this->createdAt = $createdAt instanceof DateTime ? $createdAt : new DateTime($createdAt);
            $this->member_id = $member_id;
            $this->projectid = $projectid;
        }

        public function getId(): int
        {
            return $this->id;
        }
        public function setId(int $id): void
        {
            $this->id = $id;
        }

        public function getTitre(): string
        {
            return $this->titre;
        }
        public function setTitre(string $titre): void
        {
            $this->titre = $titre;
        }

        public function getDescription(): string
        {
            return $this->description;
        }
        public function setDescription(string $description): void
        {
            $this->description = $description;
        }

        public function getStatus(): string
        {
            return $this->status;
        }
        public function setStatus(string $status): void
        {
            $this->status = $status;
        }

        public function getTag(): string
        {
            return $this->tag;
        }
        public function setTag(string $tag): void
        {
            $this->tag = $tag;
        }

        public function getCategory(): Category
        {
            return $this->iscategory;
        }
        public function setCategory(Category $iscategory): void
        {
            $this->iscategory = $iscategory;
        }

        public function getStarteAt(): dateTime
        {
            return $this->starteAt;
        }
        public function setStarteAt(dateTime $starteAt): void
        {
            $this->starteAt = $starteAt;
        }

        public function getCompleteAt(): dateTime
        {
            return $this->completeAt;
        }
        public function setCompleteAt(dateTime $completeAt): void
        {
            $this->completeAt = $completeAt;
        }

        public function getCreatedAt(): dateTime
        {
            return $this->createdAt;
        }
        public function setCreatedAt(dateTime $createdAt): void
        {
            $this->createdAt = $createdAt;
        }

        public function getMember(): string
        {
            return $this->member_id;
        }
        public function setMember(array $member_id): void
        {
            $this->member_id = $member_id;
        }

        public function getProject(): Project
        {
            return $this->projectid;
        }
        public function setProject(Project $projectid): void
        {
            $this->projectid = $projectid;
        }
    }
