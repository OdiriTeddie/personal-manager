<?php 

// require_once __DIR__ . '/../config/database.php';

$fullName = trim($_POST['full_name'] ?? '');
$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';
$confirmPassword = $_POST['confirm_password'] ?? '';

$errors = [];

// var_dump($name, $email, $password, $confirm_password);

if(empty($name)){
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

if($password !== $confirm_password){
    $errors[] = 'Passwords do not match';
}

try {
    $statement = $pdo->prepare();
} catch (\Throwable $th) {
    //throw $th;
}