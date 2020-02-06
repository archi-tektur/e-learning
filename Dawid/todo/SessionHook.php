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

    /**
     * Get task from list by it's unique ID
     *
     * @param int $id
     * @return Task|null
     */
    public function getOne(int $id): ?Task
    {
        // ensure session not empty
        if (!array_key_exists('tasks', $_SESSION)) {
            $this->init();
            // if session is empty, no element is present
            return null;
        }

        // make new array with element that matches callback
        $filtered = array_filter($_SESSION['tasks'], fn($element) => $element->getId() === $id);

        // reassign keys to this array (don't mind this now)
        $reassinged = array_values($filtered);

        // if element exists return it, else return null
        return count($reassinged) === 1 ? $reassinged[0] : null;
    }

    public function add(Task $task): void
    {
        $_SESSION['tasks'][] = $task;
    }

    public function replace(Task $newTask): void
    {
        /** @var int|null $key */
        $key = null;

        /**
         * @var int  $i
         * @var Task $task
         */
        foreach ($_SESSION['tasks'] as $i => $task) {
            if ($task->getId() === $newTask->getId()) {
                $key = $i;
            }
        }

        if ($key === null) {
            return;
        }

        $_SESSION['tasks'][$key] = $newTask;
    }

    public function remove(int $id): void
    {
        /** @var Task $element */
        $rest = array_filter($_SESSION['tasks'], fn($element) => $element->getId() !== $id);
        $_SESSION['tasks'] = $rest;
    }
}
