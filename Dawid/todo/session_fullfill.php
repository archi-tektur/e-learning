<?php declare(strict_types=1);

require_once 'Task.php';
require_once 'SessionHook.php';


/**
 * Returns four random test tasks
 *
 * @return Task[]
 * @throws Exception // don't mind this this now
 */
function prepareData(): array
{
    $task1 = new Task();
    $task1->setTitle('ABCD 1')
          ->setContent('Jakaś treść 1')
          ->setAddDate(new DateTime())
          ->setStarCount(1);

    $task2 = new Task();
    $task2->setTitle('ABCD 2')
          ->setContent('Jakaś treść 2')
          ->setAddDate(new DateTime())
          ->setStarCount(1);

    $task3 = new Task();
    $task3->setTitle('ABCD 3')
          ->setContent('Jakaś treść 3')
          ->setAddDate(new DateTime())
          ->setStarCount(1);

    $task4 = new Task();
    $task4->setTitle('ABCD 4')
          ->setContent('Jakaś treść 4')
          ->setAddDate(new DateTime())
          ->setStarCount(1);

    return [$task1, $task2, $task3, $task4];
}

/**
 * Loads task collection into session. Call this function only once, then disable (comment out) it
 *
 * @param SessionHook $session
 * @throws Exception // don't mind this this now
 */
function fullfillSession(SessionHook $session): void
{
    $tasks = prepareData();
    $session->setTasks([...$session->getTasks(), ...$tasks]);
}
