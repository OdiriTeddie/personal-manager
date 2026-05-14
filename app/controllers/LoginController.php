<?php 

require_once __DIR__ . '/../../config/database.php';

$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';

$errors = [];

if(empty($email)){
    $errors[] = 'Email is required';
}

if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors[] = 'Invalid email';
}

if(empty($password)){
    $errors[] = 'Password is required';
}


if(!empty($errors)){
    $_SESSION['errors'] = $errors;

    header('Location: /login');

    exit;
}

$statement = $pdo->prepare("
    SELECT * FROM users 
    WHERE EMAIL = :email
    LIMIT 1
");

$statement->execute([
    'email' => $email
]);

$user = $statement->fetch(PDO::FETCH_ASSOC);

if(!$user || !password_verify($password, $user['password'])){
    $errors[] = 'Invalid login credentials';
    $_SESSION['errors'] = $errors;
    header('Location: /login');
    exit;
}


$_SESSION['user'] = [
    'id' => $user['id'],
    'full_name' => $user['full_name'],
    'email' => $user['email'],
];

header('Location: /dashboard');
exit;
