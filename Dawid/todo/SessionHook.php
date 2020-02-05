<?php declare(strict_types=1);

class SessionHook
{
    public function __construct()
    {
        session_start();
    }

    /**
     * @return Task[]
     */
    public function getTasks(): array
    {
        if (!array_key_exists('tasks', $_SESSION)) {
            $this->init();
        }

        return $_SESSION['tasks'];
    }

    public function init(): void
    {
        $_SESSION['tasks'] = [];
    }

    /**
     * @param Task[] $tasks
     */
    public function setTasks(array $tasks): void
    {
        $_SESSION['tasks'] = $tasks;
    }

    public function clear(): void
    {
        $this->init();
    }

    public function remove(int $id): void
    {
        /** @var Task $element */
        $rest = array_filter($_SESSION['tasks'], fn($element) => $element->getId() !== $id);
        $_SESSION['tasks'] = $rest;
    }

    public function getTaskById(int $id): Task
    {

    }
}
