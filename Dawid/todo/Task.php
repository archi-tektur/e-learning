<?php declare(strict_types=1);

class Task
{
    private int $id;
    private string $title;
    private string $content;
    private int $starCount;
    private DateTime $addDate;
    private bool $archived = false;


    public function __construct()
    {
        $this->id = random_int(0, 100);
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): Task
    {
        $this->title = $title;
        return $this;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): Task
    {
        $this->content = $content;
        return $this;
    }

    public function getStarCount(): int
    {
        return $this->starCount;
    }

    public function setStarCount(int $starCount): Task
    {
        if ($starCount < 0) {
            $starCount = 0;
        }
        if ($starCount > 2) {
            $starCount = 2;
        }
        $this->starCount = $starCount;
        return $this;
    }

    public function getAddDate(): DateTime
    {
        return $this->addDate;
    }

    public function setAddDate(DateTime $addDate): Task
    {
        $this->addDate = $addDate;
        return $this;
    }

    public function isArchived(): bool
    {
        return $this->archived;
    }

    public function setArchived(bool $isArchived): Task
    {
        $this->archived = $isArchived;
        return $this;
    }

}
