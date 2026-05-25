<?php 

require_once __DIR__ . '/../../../config/database.php';

$title = $_POST['title'];
$content = $_POST['content'];

$errors = [];

if(empty($title)){
    $errors[] = 'Title is required';
}

if(empty($content)){
    $errors[] = 'content is required';
}

if(!empty($errors)){
    $_SESSION['errors'] = $errors;

    header('Locations: /dashboard/notes');

    exit;
}

$statement = $pdo->prepare("
    INSERT INTO notes (user_id, title, content)
    VALUES (:user_id, :title, :content)
");

$statement->execute([
    'user_id' => 1,
    'title' => $title,
    'content' => $content,
]);

$_SESSION['success'] = 'Notes created successfully';


header('Location: /dashboard/notes');
exit;