<?php 

require_once __DIR__ . '/../../../config/database.php';


$title = trim($_POST['title']);
$description = trim($_POST['description']);
$priority = $_POST['priority'];
$dueDateInput = trim($_POST['due_date'] ?? '');
$createdAt = date('Y-m-d H:i:s');

$errors = [];

if(empty($title)){
    $errors[] = 'Title is required';
}

if(empty($description)){
    $errors[] = 'Description is required';
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


$statement = $pdo->prepare("
    INSERT INTO tasks (title, description, priority, due_date, created_at, user_id)
    VALUES (:title, :description, :priority, :due_date, :created_at, :user_id)
");

$statement->execute([
    'title' => $title,
    'description' => $description,
    'priority' => $priority,
    'due_date' => $dueDate,
    'created_at' => $createdAt,
    'user_id' => 1,
]);

$_SESSION['success'] = 'Task created successfully';


header('Location: /dashboard/tasks');
exit;
