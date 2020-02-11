<?php declare(strict_types=1);

class Task
{
    private int $userId;
    private int $id;
    private string $title;
    private bool $completed;

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): Task
    {
        $this->userId = $userId;
        return $this;
    }

    public function getId(): int
    {
        return $this->id;
    }


    public function setId(int $id): Task
    {
        $this->id = $id;
        return $this;
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

    public function isCompleted(): bool
    {
        return $this->completed;
    }

    public function setCompleted(bool $completed): Task
    {
        $this->completed = $completed;
        return $this;
    }
}
