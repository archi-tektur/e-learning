<?php declare(strict_types=1);

require_once __DIR__ . '/Task.php';

class TaskBuilder
{
    /**
     * @param array $tasks
     * @return Task[]
     */
    public static function buildAllTasks(array $tasks): array
    {
        $objects = [];
        foreach ($tasks as $task) {
            $objects[] = self::buildTask($task);
        }
        return $objects;
    }

    public static function buildTask(array $parameters): Task
    {
        $task = new Task();
        return $task->setId($parameters['id'])
                    ->setUserId($parameters['userId'])
                    ->setTitle($parameters['title'])
                    ->setCompleted($parameters['completed']);
    }
}