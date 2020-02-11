<?php declare(strict_types=1);
require_once __DIR__ . '/src/Task.php';
require_once __DIR__ . '/src/TaskBuilder.php';
require_once __DIR__ . '/src/DataLoader.php';

$data = DataLoader::load();
$tasks = TaskBuilder::buildAllTasks($data);

?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay"
          crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>

<div class="container">
    <h1 class="container__title">Todos</h1>
    <div class="container__division">
    <?php foreach ($tasks as $task): ?>
        <div class="box">
            <h2 class="box__title">
                <?php if ($task->isCompleted()): ?>
                    <spam aria-hidden="true" class="fas fa-check-square"></spam>
                <?php else: ?>
                    <spam aria-hidden="true" class="fas fa-times-circle"></spam>
                <?php endif; ?>
                <span><?php echo $task->getTitle(); ?></span>
            </h2>
            <hr class="box__divider">
            <p class="box__completed">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium commodi excepturi facere, fugit
                harum.
            </p>
            <span class="box__id"><?php echo $task->getId(); ?></span>
        </div>
    <?php endforeach; ?>
    </div>
</div>

</body>
</html>