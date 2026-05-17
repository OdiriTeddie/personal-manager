<?php


require_once __DIR__ . '/../../../config/database.php';


$errors = [];

if(empty($taskId)){
    $errors[] = 'Invalid Task';

    header('Location: /dashbaord/tasks');
}

if(!is_string($taskId)){
    $errors[] = 'Invalid Task';

    header('Location: /dashbaord/tasks');
}

$statement = $pdo->prepare("
    DELETE FROM tasks
    WHERE id = :id
");

$statement->execute([
    'id' =>  $taskId
]);

$_SESSION['success'] = 'Task deleted successfully';

header('Location: /dashboard/tasks');

exit;
