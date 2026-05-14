<?php 

require_once __DIR__ . '/../../config/database.php';

$fullName = trim($_POST['full_name'] ?? '');
$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';
$confirmPassword = $_POST['password_confirmation'] ?? '';

$errors = [];


// VALIDATION

if(empty($fullName)){
    $errors[] = 'Full Name is required';
}

if(empty($email)){
    $errors[] = 'Email is required';
}

if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors[] = 'Email is invalid';
}

if(empty($password)){
    $errors[] = 'Password is required';
}

if(strlen($password < 5)){
    $errors[] = 'Password length must be at least 5 characters';
}

if($password !== $confirmPassword){
    $errors[] = 'Passwords do not match';
}

// Check if Email already exists


$statement = $pdo->prepare('SELECT id FROM users WHERE EMAIL = :email');

$statement->execute([
    'email' => $email
]);

$existingUser = $statement->fetch();


if($existingUser) {
    $error[] = 'Email already exists';
}

if(!empty($errors)){
    $_SESSION['errors'] = $errors;

    header('Location: /register');

    exit;
}


// Hash Password

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);


// Insert User

$statement = $pdo->prepare("
    INSERT INTO users (full_name, email, password)
    VALUES(:full_name, :email, :password)
");

$statement->execute([
    'full_name' => $fullName,
    'email' => $email,
    'password' => $hashedPassword
]);

header('Location: /login');

exit;