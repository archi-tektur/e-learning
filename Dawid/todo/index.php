<?php declare(strict_types=1);
require_once '../../php_error_handling.php';
require_once 'Task.php';
require_once 'SessionHook.php';
require_once 'listeners.php';
require_once 'session_fullfill.php';

$session = new SessionHook();

if (array_key_exists('remove', $_GET)) {
    $session->remove((int)$_GET['remove']);
    header('Location: /');
    exit;
}

$tasks = $session->getTasks();

// run this function only once, otherwise it'll add 4 new tasks each time you'll handle the request (F5 in browser)
fullfillSession($session);

?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <link href="styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay"
          crossorigin="anonymous">
    <title>Nasze zadanie TODO</title>
</head>
<body>

<?php foreach ($tasks as $task): ?>
    <div class="box">
        <div class="box__nav">
            <h2 class="box__title"><?php echo $task->getTitle(); ?></h2>
            <a class="box__close-button" href="?remove=<?php echo $task->getId(); ?>">&times;</a>
        </div>
        <div class="box__content">
            <p class="box__text"><?php echo $task->getContent(); ?></p>
            <span class="box__stars">
            <?php for ($i = 0; $i < $task->getStarCount() + 1; $i++): ?>
                <span class="fas fa-star"></span>
            <?php endfor; ?>
        </span>
            <span class="box__time">Dodano o <?php echo $task->getAddDate()->format('H:i, d.m.Y'); ?></span>
        </div>
    </div>
<?php endforeach; ?>

</body>
</html>