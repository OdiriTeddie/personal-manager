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
    SELECT * FROM tasks
    WHERE id = :id
    LIMIT 1
");

$statement->execute([
    'id' =>  $taskId
]);

$task = $statement->fetch(PDO::FETCH_ASSOC);

if(!$task){
    http_response_code(404);
    echo 'Task not found';
    exit;
}


require_once __DIR__  .  '/../../views/tasks/delete.php';