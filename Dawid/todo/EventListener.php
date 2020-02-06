<?php declare(strict_types=1);

class EventListener
{
    private SessionHook $sessionHook;

    public function __construct(SessionHook $sessionHook)
    {
        $this->sessionHook = $sessionHook;
    }

    public function enable(): void
    {
        $this->archiveListener();
        $this->deleteListener();
    }

    private function archiveListener(): void
    {
        if (array_key_exists('archive', $_GET)) {
            $task = $this->sessionHook->getOne((int)$_GET['archive']);
            if ($task instanceof Task) {
                $task->setArchived(!$task->isArchived());

                $this->sessionHook->replace($task);

                header('Location: /');
                exit;
            }
        }
    }

    private function deleteListener(): void
    {
        if (array_key_exists('remove', $_GET)) {
            $this->sessionHook->remove((int)$_GET['remove']);
            header('Location: /');
            exit;
        }
    }
}

