<?php

require_once __DIR__ . '/../../../config/database.php';

$title = trim($_POST['title'] ?? '');
$description = trim($_POST['description'] ?? '');
$priority = $_POST['priority'] ?? '';
$dueDateInput = trim($_POST['due_date'] ?? '');

$errors = [];

if(empty($taskId) || !ctype_digit((string) $taskId)){
    http_response_code(404);
    echo 'Task not found';
    exit;
}

if(empty($title)){
    $errors[] = 'Title is required';
}

if(empty($description)){
    $errors[] = 'Description is required';
}

if(!in_array($priority, ['low', 'medium', 'high'], true)){
    $errors[] = 'Priority is invalid';
}

if ($dueDateInput === '') {
    $dueDate = null;
} else {
    $date = DateTime::createFromFormat('Y-m-d', $dueDateInput);

    if (!$date || $date->format('Y-m-d') !== $dueDateInput) {
        $errors[] = 'Due date is invalid';
    } else {
        $dueDate = $date->format('Y-m-d');
    }
}

if(!empty($errors)){
    $_SESSION['errors'] = $errors;

    header("Location: /dashboard/tasks/$taskId/edit");
    exit;
}

$statement = $pdo->prepare("
    UPDATE tasks
    SET title = :title,
        description = :description,
        priority = :priority,
        due_date = :due_date
    WHERE id = :id
");

$statement->execute([
    'title' => $title,
    'description' => $description,
    'priority' => $priority,
    'due_date' => $dueDate,
    'id' => $taskId,
]);

$_SESSION['success'] = 'Task updated successfully';

header('Location: /dashboard/tasks');
exit;
